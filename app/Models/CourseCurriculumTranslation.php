<?php

namespace App\Models;

use App\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;

class CourseCurriculumTranslation extends Model
{
    use SpatieLogsActivity;

    public $fillable = ['image_alt','title'];
    public $timestamps = false;
}