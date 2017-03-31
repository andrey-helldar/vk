<?php

namespace Helldar\Vk;

use Helldar\Vk\Commands\VkRequestsClear;
use Illuminate\Support\ServiceProvider;

class VkServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');

        $this->mergeConfigFrom(__DIR__.'/config/settings.php', 'vk');

        $this->publishes(array(
            __DIR__.'/config/vk.php'  => config_path('vk.php'),
            __DIR__.'/Resources/view' => resource_path('views/vendor/vk'),
        ));

        if ($this->app->runningInConsole()) {
            $this->commands(array(
                VkRequestsClear::class,
            ));
        }
    }
}
