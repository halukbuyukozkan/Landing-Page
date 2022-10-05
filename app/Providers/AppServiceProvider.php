<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use NascentAfrica\Jetstrap\JetstrapFacade;

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
        view()->composer('*',function($view) {
            $view->with('parentcategories', Category::where('category_id',null)->get());
        });
    
        Paginator::useBootstrap();
        if (App::environment('local')) {
            JetstrapFacade::useAdminLte3();
        }
        if (config('app.force_https')) {
            URL::forceScheme('https');
        }
    }
}
