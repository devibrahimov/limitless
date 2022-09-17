<?php

namespace App\Models\Concerns;

use Exception;
use Webpatser\Uuid\Uuid;

trait HasUuid
{
    /**
     * @return void
     * @throws Exception
     */
    public static function boot(): void
    {
        parent::boot();

        self::creating(static function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
}
