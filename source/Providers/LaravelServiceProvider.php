<?php

namespace LaravelParsedown\Providers;

use Parsedown;
use Illuminate\Support\ServiceProvider;

/**
 * LaravelProvider.
 *
 * @author Nathaniel Blackburn <support@nblackburn.uk> (http://nblackburn.uk)
 */
class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Check config_path exists.
        if (function_exists('config_path')) {
            // Publish the configuration file.
            $this->publishes([
                __DIR__.'/../../config/parsedown.php' => config_path('parsedown.php'),
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge the configurations.
        $this->mergeConfigFrom(__DIR__.'/../../config/parsedown.php', 'parsedown');

        // Register the parsedown instance.
        $this->app->singleton('parsedown', function () {
            // Return the instance.
            return Parsedown::instance()
                ->setUrlsLinked(config('parsedown.links'))
                ->setMarkupEscaped(config('parsedown.escaped'))
                ->setBreaksEnabled(config('parsedown.linebreaks'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'parsedown',
        ];
    }
}
