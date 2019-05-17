<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Seo extends Model
{
    use Translatable;

    protected $translatable = ['title', 'description', 'keyword'];

    protected $guarded = [];

    /**
     * Get all of the owning seoable models.
     */
    public function seoable()
    {
        return $this->morphTo();
    }
}
