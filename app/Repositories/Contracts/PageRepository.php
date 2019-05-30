<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface PagesRepository.
 *
 * @package namespace App\Repositories\Contracts;
 */
interface PageRepository extends RepositoryInterface
{
    //Get data page by id
    public function getDetail($slug);
}
