<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\SocialLink;
use App\Models\User;

class SocialLinkPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, SocialLink $socialLink)
    {}

    public function create(User $user)
    {}

    public function update(User $user, SocialLink $socialLink)
    {}

    public function delete(User $user, SocialLink $socialLink)
    {}

    public function restore(User $user, SocialLink $socialLink)
    {}

    public function forceDelete(User $user, SocialLink $socialLink)
    {}
}