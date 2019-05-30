<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('frontend.index.index');
    }

    public function changeLocale($lang)
    {
        session(['locale' => $lang]);
        return back();
    }
}
