<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Team;
use App\Models\User;

class TeamPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, Team $team)
    {}

    public function create(User $user)
    {}

    public function update(User $user, Team $team)
    {}

    public function delete(User $user, Team $team)
    {}

    public function restore(User $user, Team $team)
    {}

    public function forceDelete(User $user, Team $team)
    {}
}