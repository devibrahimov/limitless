<?php

namespace App\Models;

use App\Models\Concerns\Sortable;
use App\Models\Concerns\TranslatableColumnsTrait;
use App\Traits\SpatieLogsActivity;
use Astrotomic\Translatable\Translatable;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Badge extends Model
{
    use Translatable,
        TranslatableColumnsTrait,
        Sortable,
        SoftDeletes,
        CascadeSoftDeletes,
        SpatieLogsActivity;

    protected $fillable = ['bg_color','text_color','border_color','icon','status'];
    public $translatedAttributes = ['name', 'slug'];
    protected $cascadeDeletes = ['translations','products'];
    public $with = ['translations'];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
