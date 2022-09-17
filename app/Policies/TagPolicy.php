<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Tag;
use App\Models\User;

class TagPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, Tag $tag)
    {}

    public function create(User $user)
    {}

    public function update(User $user, Tag $tag)
    {}

    public function delete(User $user, Tag $tag)
    {}

    public function restore(User $user, Tag $tag)
    {}

    public function forceDelete(User $user, Tag $tag)
    {}
}