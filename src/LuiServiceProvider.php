<?php namespace Luivel\Lui;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LuiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        include_once __DIR__ . '/Http/routes.php';

        $this->loadViewsFrom(__DIR__ . '/views', 'lui');

        $this->publishes([
            __DIR__ . '/database/migrations/2016_08_01_000001_create_demo_table.php' => base_path('database/migrations/2016_08_01_000000_create_demo_table.php')
        ]);

        $router->middleware('luiAuth', \Luivel\Lui\Http\Middleware\luiAuth::class);
        $router->middleware('luiGuest', \Luivel\Lui\Http\Middleware\luiGuest::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('lui', function ($app) {
            return new Lui;
        });
    }
}
