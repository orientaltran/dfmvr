<?php

namespace App\Services;

use App\Repositories\Contracts\PostRepositoryInterface;
use App\Services\AbstractService;

class PostService extends AbstractService
{
    protected $repository;

    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }



}