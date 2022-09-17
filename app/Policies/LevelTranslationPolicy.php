<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\LevelTranslation;
use App\Models\User;

class LevelTranslationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, LevelTranslation $levelTranslation)
    {}

    public function create(User $user)
    {}

    public function update(User $user, LevelTranslation $levelTranslation)
    {}

    public function delete(User $user, LevelTranslation $levelTranslation)
    {}

    public function restore(User $user, LevelTranslation $levelTranslation)
    {}

    public function forceDelete(User $user, LevelTranslation $levelTranslation)
    {}
}