<?php

namespace App\Models;

use App\Http\Livewire\Components\Tabs\Products;
use App\Models\Concerns\HasSlug;
use App\Models\Concerns\Sortable;
use App\Models\Concerns\TranslatableColumnsTrait;
use App\Traits\SpatieLogsActivity;
use Astrotomic\Translatable\Translatable;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nestable\NestableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Category extends Model
{

    protected $fillable = ['name','status'];

//    use HasFactory,
//        NestableTrait,
////        Translatable,
////        TranslatableColumnsTrait,
//        HasSlug,
//        SoftDeletes,
//        CascadeSoftDeletes,
//        InteractsWithMedia,
//        SpatieLogsActivity;
//
//    protected $fillable = ['parent_id', 'status','order'];
//    protected $translatedAttributes = ['name','slug'];
//    protected $parent = 'parent_id';
//    protected $cascadeDeletes = ['translations'];
//
//    public $with = ['translations','media'];
//
//    protected $dates = ['deleted_at'];
//
//    public function registerMediaConversions(Media $media = null): void
//    {
//        $this
//            ->addMediaConversion('thumb-small')
//            ->width(22)
//            ->height(22)
//            ->optimize()
//            ->queued();
//
//        $this
//            ->addMediaConversion('thumb-medium')
//            ->width(180)
//            ->height(180)
//            ->optimize()
//            ->queued();
//
//        $this
//            ->addMediaConversion('thumb-large')
//            ->width(312)
//            ->height(244)
//            ->queued();
//    }
//
//    public function getAppUrlAttribute(): string
//    {
//        if (isset($this->transslug)) {
//            return route('frontend.category.show', ['slug' => $this->transslug]);
//        }
//        return 'javascript:void(0);';
//    }
//
//    public function parent():HasOne
//    {
//        return $this->hasOne(__CLASS__, 'id', 'parent_id')->where('status', '=', '1');
//    }
//
//    public function options(): HasMany
//    {
//        return $this->hasMany(OptionGroup::class)->active()->with('options');
//    }
//
//    public function subcategories(): HasMany
//    {
//        return $this->hasMany(__CLASS__,'parent_id')->where('status', '=', '1');
//    }
//
//    public function scopeParent($query)
//    {
//        return $query->where('parent_id', 0);
//    }
//
//    public function scopeActive($query)
//    {
//        return $query->where('status', '1');
//    }
}
