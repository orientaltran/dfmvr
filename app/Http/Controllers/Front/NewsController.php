<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Repositories\Contracts\NewsRepository;

class NewsController extends Controller
{
	 public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {	

    	$news = $this->repository->getPaginate(8);
        return view('frontend.news.index', compact('news'));
    }

}