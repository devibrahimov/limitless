<?php

namespace App\Models;

use App\Models\Concerns\Sortable;
use App\Models\Concerns\TranslatableColumnsTrait;
use App\Traits\SpatieLogsActivity;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Video extends  Model
{
    use Translatable, TranslatableColumnsTrait, SpatieLogsActivity;

    protected $fillable = ['link1','link2','title1','title2','content'];
    protected $translatedAttributes = ['title1','title2','content'];
    public $with = ['translations'];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}