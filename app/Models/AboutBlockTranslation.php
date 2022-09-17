<?php

namespace App\Models;

use App\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;

class AboutBlockTranslation extends Model{
    use SpatieLogsActivity;

    public $fillable = ['title','content'];
    public $timestamps = false;
}
