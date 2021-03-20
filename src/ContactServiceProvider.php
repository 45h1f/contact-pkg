<?php


namespace Admin\Contact;


use Closure;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/route/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/migration');


        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);

    }

    public function register()
    {

    }
}
