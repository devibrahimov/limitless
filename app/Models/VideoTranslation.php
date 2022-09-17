<?php

namespace App\Models;

use App\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;

class VideoTranslation extends Model
{
    use SpatieLogsActivity;

    public $fillable = ['title1','title2', 'content'];
    public $timestamps = false;
}