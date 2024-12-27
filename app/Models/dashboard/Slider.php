<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Slider extends Model
{  
    use SoftDeletes;
    protected $guarded =['id'];
}
