<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\TeamTranslation;
use App\Models\User;

class TeamTranslationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, TeamTranslation $teamTranslation)
    {}

    public function create(User $user)
    {}

    public function update(User $user, TeamTranslation $teamTranslation)
    {}

    public function delete(User $user, TeamTranslation $teamTranslation)
    {}

    public function restore(User $user, TeamTranslation $teamTranslation)
    {}

    public function forceDelete(User $user, TeamTranslation $teamTranslation)
    {}
}