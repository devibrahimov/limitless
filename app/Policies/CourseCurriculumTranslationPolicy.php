<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\CourseCurriculumTranslation;
use App\Models\User;

class CourseCurriculumTranslationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, CourseCurriculumTranslation $courseCurriculumTranslation)
    {}

    public function create(User $user)
    {}

    public function update(User $user, CourseCurriculumTranslation $courseCurriculumTranslation)
    {}

    public function delete(User $user, CourseCurriculumTranslation $courseCurriculumTranslation)
    {}

    public function restore(User $user, CourseCurriculumTranslation $courseCurriculumTranslation)
    {}

    public function forceDelete(User $user, CourseCurriculumTranslation $courseCurriculumTranslation)
    {}
}