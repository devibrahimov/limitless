<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Course;
use App\Models\User;

class CoursePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, Course $course)
    {}

    public function create(User $user)
    {}

    public function update(User $user, Course $course)
    {}

    public function delete(User $user, Course $course)
    {}

    public function restore(User $user, Course $course)
    {}

    public function forceDelete(User $user, Course $course)
    {}
}