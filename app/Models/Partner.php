<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Partner.
 *
 * @package namespace App\Models;
 */
class Partner extends Model implements Transformable
{
    use TransformableTrait;

    protected $translatable = ['name', 'description', 'link', 'slug', 'image', 'position', 'active'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
