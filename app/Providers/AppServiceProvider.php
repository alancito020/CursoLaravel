<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//agregar este archivo  que hace referencia a esquemas
use Illuminate\Support\Facades\Schema;
//---------------

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //--------------------------}
        Schema::defaultStringLength(191);
        //despues ejecutar este comando en la terminal "php artisan migrate" y para que funcione el login y el registro necesita "npm install" y "npm run dev"
    }
}
