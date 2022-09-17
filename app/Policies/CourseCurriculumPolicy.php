<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\CourseCurriculum;
use App\Models\User;

class CourseCurriculumPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, CourseCurriculum $courseCurriculum)
    {}

    public function create(User $user)
    {}

    public function update(User $user, CourseCurriculum $courseCurriculum)
    {}

    public function delete(User $user, CourseCurriculum $courseCurriculum)
    {}

    public function restore(User $user, CourseCurriculum $courseCurriculum)
    {}

    public function forceDelete(User $user, CourseCurriculum $courseCurriculum)
    {}
}