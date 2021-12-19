<?php 

namespace myGov\Logtracker;

use Illuminate\Support\ServiceProvider;
use Illuminate\Events\EventServiceProvider;

class LogtrackerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/obd_tracker.php', 'logtracker');

    }

    public function register()
    {
        $this->app->register(EventServiceProvider::class);   
    }
    
}
