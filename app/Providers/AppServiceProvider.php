<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        //first option for sharing a variable in every page
        view()->share('posts',[
            'first','second','third',
            'fourth','fifth','sixth'
        ]);

        //second option share a variable to a specific page
        view()->composer('welcome' , function ($view) {
            $view->with('posts2' , [
            'first2','second2','third2',
            'fourth2','fifth2','sixth2'
            ]);
        });

        //shared variables using array for page names
        view()->composer(['partials.first' , 'partials.second'], function ($view) {
            $view->with('students' , [
                'Christopher',
                'Dapiton',
                'Marneth',
                'Rodelyn',
                'Jessie',
                'Mitch'
            ]);
        });

        //passing to all page in the partials directory
        //you can also you * to shared for all pages
        view()->composer(['partials.*'] , function ($view) {
             $view->with('students' , [
                'Christopher',
                'Dapiton',
                'Marneth',
                'Rodelyn',
                'Jessie',
                'Mitch'
            ]);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
