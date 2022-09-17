<?php

namespace App\Models\Concerns;

use App\Models\Tag;

trait HasTaggable
{
    /**
     * Get all the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
