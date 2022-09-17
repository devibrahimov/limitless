<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SocialLink extends Model
{
    /**
     * Get the parent commentable model (post or video).
     */
    public function socialable(): MorphTo
    {
        return $this->morphTo();
    }
}
