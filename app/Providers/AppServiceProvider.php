<?php

namespace App\Providers;

use App\Models\CategoryFormation;
use App\Models\Service;
use App\Models\Formation;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        view()->composer('pages.services.services', function ($view) {
            $view->with('services', Service::all());
        });

        view()->composer('pages.formations.formations', function($view){
            $view->with('formations', Formation::with('category_formation')
                ->get());
        });

        view()->composer('index', function($view){
            $view->with('formations', Formation::with('category_formation')
                ->get());
            $view->with('courses', Formation::with('category_formation')
                ->orderBy('created_at', 'desc')
                ->paginate(4));
            $view->with('categories', CategoryFormation::with('formations')
                ->get());
        });

        view()->composer('includes.footer', function ($view){
            $view->with('formations', Formation::orderBy('created_at', 'desc')->paginate(2));
        });
    }
}
