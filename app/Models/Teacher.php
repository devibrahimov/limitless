<?php

namespace App\Models;

use App\Models\Concerns\HasSlug;
use App\Models\Concerns\HasTimeago;
use App\Models\Concerns\HasUuid;
use App\Models\Concerns\Sortable;
use App\Models\Concerns\TranslatableColumnsTrait;
use App\Traits\SpatieLogsActivity;
use Astrotomic\Translatable\Translatable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Teacher extends Authenticatable
{

    use HasFactory,
        HasTimeago,
//        Translatable,
//        TranslatableColumnsTrait,
        HasUuid,
    HasSlug,
        CascadeSoftDeletes,
        SpatieLogsActivity,
        InteractsWithViews,
        InteractsWithMedia;

//    protected string $guard = 'teachers';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
//        'uuid'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

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
            ->width(768)
            ->height(548)
            ->optimize()
            ->queued();
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
