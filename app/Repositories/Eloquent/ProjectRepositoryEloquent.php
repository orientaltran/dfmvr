<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\ProjectRepository;
use App\Models\Project;
use App\Validators\ProjectValidator;

/**
 * Class ProjectRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class ProjectRepositoryEloquent extends BaseRepository implements ProjectRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Project::class;
    }

    public function getLimit($limit)
    {
        return $this->model->active()->limit($limit)->get();
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    Public function getPaginate($pagination)
    {
        return $this->model->active()->paginate($pagination);
    }

    Public function getDetail($slug)
    {
        return $this->model->active()->where('slug', $slug)->first();
    }

    public function getWithCategory ($id, $pagination) 
    {
        return $this->model->active()->where('category_id', $id)->paginate($pagination);   
    }
    
}
