<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Translation;
use App\Models\User;

class TranslationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, Translation $translation)
    {}

    public function create(User $user)
    {}

    public function update(User $user, Translation $translation)
    {}

    public function delete(User $user, Translation $translation)
    {}

    public function restore(User $user, Translation $translation)
    {}

    public function forceDelete(User $user, Translation $translation)
    {}
}