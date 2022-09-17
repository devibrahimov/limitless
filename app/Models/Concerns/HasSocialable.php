<?php

namespace App\Models\Concerns;

use App\Models\SocialLink;

trait HasSocialable
{
    /**
     * @return mixed
     */
    public function socialLinks()
    {
        return $this->morphMany(SocialLink::class, 'socialable');
    }
}
