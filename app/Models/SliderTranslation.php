<?php

namespace App\Models;

use App\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    use SpatieLogsActivity;

    public $fillable = ['image_alt','name','text', 'button1', 'button2'];
    public $timestamps = false;
}
