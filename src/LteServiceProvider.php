<?php
namespace Mostafiz\LaraLte;

use Illuminate\Support\ServiceProvider;

class LteServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/public' => public_path(),
        ], 'laralte-assets');

        $this->publishes([
            __DIR__.'/database/migrations' => base_path('database/migrations/'),
            __DIR__.'/Http/Controllers' => app_path('Http/Controllers/'),
            __DIR__.'/Mail' => app_path('Mail/'),
            __DIR__.'/routes' => base_path('routes/'),
            __DIR__.'/config/laralte.php' => config_path('laralte.php'),
            __DIR__.'/views'=> resource_path('views/'),

        ], 'laralte-essentials');

        if(file_exists( base_path('/routes/route-admin.php') ))
        {
            $this->loadRoutesFrom( base_path('/routes/route-admin.php') );
        }

        
        
    }
    
    public function register()
    {
        if(file_exists(__DIR__."/helpers/menuActive.php"))
        {
            include_once __DIR__."/helpers/menuActive.php";
        }

    }
}