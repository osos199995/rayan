<?php

namespace App\Providers;

use App\Category;
use App\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        View::composer([
            'layouts.front',
        ], function($view)
        {
            $view->with('categories', Category::all());
        });
    }
}
