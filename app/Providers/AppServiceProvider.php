<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
       
        config(['app.locale' => 'id']);
	    Carbon::setLocale('id');
        //
        $chas = DB::table('data_do')->get();
        view()->share(compact('chas'));
    }
}
