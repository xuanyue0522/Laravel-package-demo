<?php

namespace Xuanyue\Hasher;

use Illuminate\Support\ServiceProvider;

class CheckPasswordProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('md5password', function () {
            return new CheckPassword();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
