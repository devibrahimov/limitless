<?php

namespace App\Models;

use App\Models\Concerns\Sortable;
use App\Models\Concerns\TranslatableColumnsTrait;
use App\Traits\SpatieLogsActivity;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Course extends  Model implements HasMedia
{
    use Translatable, InteractsWithMedia, TranslatableColumnsTrait, SpatieLogsActivity;

    protected $fillable = ['status','title','duraction','lectures','price','content','teacher_id','level_id','category_id'];
    protected $translatedAttributes = ['image_alt','title','content'];
    public $with = ['translations','media'];

    public function registerMediaConversions(Media $media = null): void
    {

        $this
            ->addMediaConversion('thumb-small')
            ->width(64)
            ->height(64)
            ->optimize()
            ->queued();

        $this
            ->addMediaConversion('thumb-medium')
            ->width(348)
            ->height(248)
            ->optimize()
            ->queued();

        $this
            ->addMediaConversion('thumb-large')
            ->width(872)
            ->height(432)
            ->optimize()
            ->queued();
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeFilter($query){
        if (request('category') != ''){
            $query->where('category_id' , request('category'));
        }
        if (request('level') != ''){
            $query->where('level_id' , request('level'));
        }

        if(request('lower') != ''){
            $query->where('price','>=',request('lower'));
        }
        if(request('upper') != ''){
            $query->where('price','<=',request('upper'));
        }
      return  $query;
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
