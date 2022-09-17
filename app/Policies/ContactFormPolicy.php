<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\ContactForm;
use App\Models\User;

class ContactFormPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {}

    public function view(User $user, ContactForm $contactForm)
    {}

    public function create(User $user)
    {}

    public function update(User $user, ContactForm $contactForm)
    {}

    public function delete(User $user, ContactForm $contactForm)
    {}

    public function restore(User $user, ContactForm $contactForm)
    {}

    public function forceDelete(User $user, ContactForm $contactForm)
    {}
}