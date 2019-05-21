<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\ContactRepository;
use App\Models\Contact;
use App\Validators\ContactValidator;

/**
 * Class ContactRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class ContactRepositoryEloquent extends BaseRepository implements ContactRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contact::class;
    }

    public function saveContact($data) 
    {
        return $this->create($data);
    } 

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
