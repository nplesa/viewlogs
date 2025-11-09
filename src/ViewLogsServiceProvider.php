<?php

namespace Nplesa\\ViewLogs;

use Illuminate\\Support\\ServiceProvider;

class ViewLogsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'viewlogs');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../config/viewlogs.php' => config_path('viewlogs.php'),
        ], 'viewlogs-config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/viewlogs.php', 'viewlogs');
    }
}
