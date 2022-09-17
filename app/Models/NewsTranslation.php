<?php

namespace App\Models;

use App\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;

class NewsTranslation extends Model
{
    use SpatieLogsActivity;

    public $fillable = ['title','content','tags','slug'];
    public $timestamps = false;
}
