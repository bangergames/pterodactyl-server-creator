<?php

namespace BangerGames\ServerCreator;

use BangerGames\ServerCreator\Commands\ServerCreate;
use Illuminate\Support\ServiceProvider;

class BangerGamesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                ServerCreate::class,
//            ]);
//        }
    }
}
