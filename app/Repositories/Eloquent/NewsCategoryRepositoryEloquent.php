<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\NewsCategoryRepository;
use App\Models\NewsCategory;
use App\Validators\NewsCategoryValidator;

/**
 * Class NewsCategoryRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class NewsCategoryRepositoryEloquent extends BaseRepository implements NewsCategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return NewsCategory::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
    public function getSlug($slug)
    {
        return $this->model->active()->where('slug', $slug)->first();
    }
}
