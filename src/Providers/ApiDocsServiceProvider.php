<?php
namespace MyApiDocs\Providers;

use Illuminate\Support\ServiceProvider;

class ApiDocsServiceProvider extends ServiceProvider
{
    public function register()
    {
 
        $this->mergeConfigFrom(__DIR__.'/../config/myapidocs.php', 'myapidocs');
    }

    public function boot()
    {
      
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
 
        $this->loadViewsFrom(__DIR__.'/../views', 'myapidocs');
 
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/myapidocs'),
        ], 'views');
    }
}
?>