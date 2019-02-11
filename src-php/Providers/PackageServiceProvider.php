<?php

namespace Dewsign\NovaTestimonials\Providers;

use Laravel\Nova\Nova;
use Illuminate\Routing\Router;
use Dewsign\NovaTestimonials\Nova\Testimonial;
use Illuminate\Support\ServiceProvider;
use Dewsign\NovaTestimonials\Nova\TestimonialCategory;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishConfigs();
        $this->bootViews();
        $this->bootAssets();
        $this->bootCommands();
        $this->publishDatabaseFiles();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Nova::resources([
            Testimonial::class,
            TestimonialCategory::class,
        ]);

        $this->mergeConfigFrom(
            $this->getConfigsPath(),
            'nova-testimonials'
        );
    }

    /**
     * Publish configuration file.
     *
     * @return void
     */
    private function publishConfigs()
    {
        $this->publishes([
            $this->getConfigsPath() => config_path('nova-testimonials.php'),
        ], 'config');
    }
    /**
     * Get local package configuration path.
     *
     * @return string
     */
    private function getConfigsPath()
    {
        return __DIR__.'/../Config/nova-testimonials.php';
    }

    /**
     * Register the artisan packages' terminal commands
     *
     * @return void
     */
    private function bootCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                // MyCommand::class,
            ]);
        }
    }

    /**
     * Load custom views
     *
     * @return void
     */
    private function bootViews()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'nova-testimonials');
        $this->publishes([
            __DIR__.'/../Resources/views' => resource_path('views/vendor/nova-testimonials'),
        ]);
    }

    /**
     * Define publishable assets
     *
     * @return void
     */
    private function bootAssets()
    {
        $this->publishes([
            __DIR__.'/../Resources/assets/js' => resource_path('assets/js/vendor/nova-testimonials'),
        ], 'js');
    }

    private function publishDatabaseFiles()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->app->make('Illuminate\Database\Eloquent\Factory')->load(
            __DIR__ . '/../Database/factories'
        );

        $this->publishes([
            __DIR__ . '/../Database/factories' => base_path('database/factories')
        ], 'factories');

        $this->publishes([
            __DIR__ . '/../Database/migrations' => base_path('database/migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../Database/seeds' => base_path('database/seeds')
        ], 'seeds');
    }
}
