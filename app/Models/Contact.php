<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Contact.
 *
 * @package namespace App\Models;
 */
class Contact extends Model implements Transformable
{
    use TransformableTrait;

    protected $translatable = ['address', 'field', 'message'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    protected $fillable = ['name', 'phone', 'email', 'address', 'field', 'message', 'status'];
}
