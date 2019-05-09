<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Project extends Model
{
    use Translatable;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoryId()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}
