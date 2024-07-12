<?php

namespace Alam\AtbjobsSharedLibrary\Providers;

use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        if (! $this->app->routesAreCached()) {
            Passport::routes();
        }
        ResetPassword::createUrlUsing(function ($notifiable, $token) {
            return env('FRONTEND_URL')."/password/reset/$token/{$notifiable->getEmailForPasswordReset()}";
        });
        VerifyEmail::createUrlUsing(function ($notifiable) {
            $id = $notifiable->getKey();
            $hash = $notifiable->getEmailForVerification();

            return env('FRONTEND_URL') . '/email/verify/' . $id . "/" . $hash;
        });
    }
}
