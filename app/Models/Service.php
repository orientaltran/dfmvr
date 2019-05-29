<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use App\Models\Trails\Seoable;
use TCG\Voyager\Traits\Translatable;

/**
 * Class Service.
 *
 * @package namespace App\Models;
 */
class Service extends Model implements Transformable
{
    use TransformableTrait, Translatable, Seoable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $translatable = ['title', 'slug', 'description', 'content'];

    /**
     * Statuses.
     */
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    protected $guarded = [];

    /**
     * Scope a query to only include active pages.
     *
     * @param  $query  \Illuminate\Database\Eloquent\Builder
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }
}
