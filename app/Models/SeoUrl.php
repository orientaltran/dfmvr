<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SeoUrl extends Model
{
    use Translatable;

    protected $translatable = ['slug'];

    protected $guarded = [];
}
