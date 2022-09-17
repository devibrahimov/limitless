<?php

namespace App\Http\Livewire\Components;

use App\Models\Subscriber;
use Livewire\Component;

class Newsletter extends Component
{
    public string $email;

    protected array $rules = [
        'email' => ['required', 'email', 'max:255', 'unique:subscribers,email'],
    ];

    protected array $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
    ];

    protected array $validationAttributes = [
        'email' => 'email address'
    ];

    public function mount()
    {
        $this->email = '';
    }

    public function submit()
    {
        $this->validate();

        Subscriber::create([
            'email' => $this->email,
        ]);

        $this->dispatchBrowserEvent('subscribed:success', [
            'title' => 'Thank you!',
            'text' => 'You have successfully subscribed to our newsletter.',
            'icon' => 'success',
        ]);

        $this->email = '';
    }

    public function render()
    {
        return view('livewire.components.newsletter');
    }
}
