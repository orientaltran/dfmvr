<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Page;
use App\Models\Partner;
use App\Repositories\Contracts\PageRepository;
use App\Repositories\Contracts\PartnerRepository;


class PagesController extends Controller
{
    public function __construct(PageRepository $repository, PartnerRepository $partner)
    {
        $this->repository = $repository;
        $this->partner = $partner;
    }
    public function index($slug)
    {
        $page = $this->repository->getDetail($slug);
        $partner = $this->partner->getPartnersById($slug);

        return view('frontend.page.index', compact('page','partner'));
    }
}