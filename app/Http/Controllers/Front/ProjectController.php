<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Repositories\Contracts\ProjectRepository;
use App\Repositories\Contracts\ProjectCategoryRepository;

class ProjectController extends Controller
{
	 public function __construct(ProjectRepository $repository, ProjectCategoryRepository $category)
    {
        $this->repository = $repository;
        $this->category   = $category;
    }


    public function index()
    {	
        $categories = $this->category->all();
    	$projects = $this->repository->getPaginate(8);

        return view('frontend.project.index', compact('projects', 'categories'));
    }

    public function detail ($slug) 
    {
    	$project = $this->repository->getDetail($slug);

    	if(empty($project)){
    		abort(404);
    	}

         $categories = $this->category->all();
    	return view('frontend.project.detail', compact('project', 'categories'));
    }

    public function category($slug) {

        $categories = $this->category->all();
        $category   = $this->category->getSlug($slug);
        $projects   = $this->repository->getWithCategory($category->id, 8);

        return view('frontend.project.index', compact('categories', 'projects'));
    }

}