<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\NewsRepository;
use App\Models\News;
use App\Validators\ContactValidator;

/**
 * Class ContactRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class NewsRepositoryEloquent extends BaseRepository implements NewsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return News::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    Public function getLimit($limit)
    {
        return $this->model->active()->limit($limit)->get();
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

    public function getRelation ($id, $category_id, $pagination) 
    {
        return $this->model
                    ->where('category_id', $category_id)
                    ->where('id', '<>', $id)
                    ->paginate($pagination);   
    }
    
}
