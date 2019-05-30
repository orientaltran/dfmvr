<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\ProjectCategoryRepository;
use App\Models\ProjectCategory;
use App\Validators\ProjectCategoryValidator;

/**
 * Class ProjectCategoryRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class ProjectCategoryRepositoryEloquent extends BaseRepository implements ProjectCategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProjectCategory::class;
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
