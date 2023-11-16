<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if (request()->is('admin/*')) {
            config(['session.cookie' => config('session.cookie_admin')]);
        }
        if (request()->is('employee/*')) {
            config(['session.cookie' => config('session.cookie_employee')]);
        }
        if (request()->is('owner/*')) {
            config(['session.cookie' => config('session.cookie_owner')]);
        }
    }
}
