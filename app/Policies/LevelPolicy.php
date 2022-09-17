<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Level;
use App\Models\User;

class LevelPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, Level $level)
    {}

    public function create(User $user)
    {}

    public function update(User $user, Level $level)
    {}

    public function delete(User $user, Level $level)
    {}

    public function restore(User $user, Level $level)
    {}

    public function forceDelete(User $user, Level $level)
    {}
}