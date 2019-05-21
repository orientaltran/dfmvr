<?php

namespace App\Models\Trails;

use App\Models\Seo;

trait Seoable
{
    /**
     * Get the table's seo.
     */
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
}
