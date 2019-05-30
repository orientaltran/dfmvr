<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Repositories\Contracts\NewsRepository;
use App\Repositories\Contracts\NewsCategoryRepository;

class NewsController extends Controller
{
	 public function __construct(NewsRepository $repository, NewsCategoryRepository $category)
    {
        $this->repository = $repository;
        $this->category = $category;
    }


    public function index()
    {	
        $categories = $this->category->all();
    	$news = $this->repository->getPaginate(8);

        return view('frontend.news.index', compact('news', 'categories'));
    }

    public function detail ($slug) 
    {
    	$news = $this->repository->getDetail($slug);
        $relations  = $this->repository->getRelation($news->id, $news->category_id, 4);

    	if(empty($news)){
    		abort(404);
    	}

    	return view('frontend.news.detail', compact('news', 'relations'));
    }

    public function category($slug) {

        $categories = $this->category->all();
        $category   = $this->category->getSlug($slug);
        $news       = $this->repository->getWithCategory($category->id, 12);

        return view('frontend.news.index', compact('categories', 'news'));
    }

}