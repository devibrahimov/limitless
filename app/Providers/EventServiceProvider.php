<?php

namespace App\Providers;

use App\Models\{
    Category,
    User,
    Faq,
    Language,
    Menu,
    Slider,
};
use App\Observers\{
    CategoryObserver,
    UserObserver,
    FaqObserver,
    LanguageObserver,
    MenuObserver,
    SliderObserver
};
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class
        ]
    ];

    /**
     * @return void
     */
    public function boot(): void
    {
        Menu::observe(new MenuObserver);
        Language::observe(new LanguageObserver);
        User::observe(new UserObserver);
        Category::observe(new CategoryObserver);
        Slider::observe(new SliderObserver);
        Faq::observe(new FaqObserver);
    }
}
