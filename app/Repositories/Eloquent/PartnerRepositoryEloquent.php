<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\partnerRepository;
use App\Models\Partner;
use App\Validators\PartnerValidator;

/**
 * Class PartnerRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class PartnerRepositoryEloquent extends BaseRepository implements PartnerRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Partner::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
