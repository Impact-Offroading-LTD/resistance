<?php

namespace Impact\Resistance;

use Illuminate\Support\ServiceProvider;

class ResistanceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'resistance');

        // Register the main class to use with the facade
        $this->app->singleton('resistance', function () {
            return new Resistance;
        });
    }

    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
           //$this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'resistance');
           $this->loadViewsFrom(__DIR__.'/../resources/views', 'resistance');
           //$this->loadMigrationsFrom(__DIR__.'/../database/migrations');
           $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('resistance.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/resistance'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/resistance'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/resistance'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }
}
