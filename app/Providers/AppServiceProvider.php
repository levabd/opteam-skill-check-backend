<?php

namespace App\Providers;

use App\Opteam\Services\Socialite\FacebookProvider;
use App\Opteam\Services\Socialite\GithubProvider;
use App\Opteam\Services\Socialite\LinkedinProvider;
use Laravel\Dusk\DuskServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningUnitTests()) {
            Schema::defaultStringLength(191);
        }

        $this->bootFacebookSocialite();

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }


    /**
     * We need a little bit to customise the FacebookProvider
     */
    private function bootFacebookSocialite()
    {
        $socialite = $this->app->make('Laravel\Socialite\Contracts\Factory');
        $socialite->extend('facebook',
            function ($app) use ($socialite) {
                $config = $app['config']['services.facebook'];
                return $socialite->buildProvider(FacebookProvider::class, $config);
            }
        );
        $socialite->extend('linkedin',
            function ($app) use ($socialite) {
                $config = $app['config']['services.linkedin'];
                return $socialite->buildProvider(LinkedinProvider::class, $config);
            }
        );
        $socialite->extend('github',
            function ($app) use ($socialite) {
                $config = $app['config']['services.github'];
                return $socialite->buildProvider(GithubProvider::class, $config);
            }
        );
    }
}
