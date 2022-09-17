<?php

namespace App\Models;

use App\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model
{
    use SpatieLogsActivity;

    public $fillable = ['image_alt','title','content'];
    public $timestamps = false;
}