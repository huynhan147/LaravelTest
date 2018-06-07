<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
//    protected $defer= true;
    public function boot()
    {
        //
        $this->app['view']->composer(['layouts.sidebar'],function($view){
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');
            $view->with(compact('tags','archives'));
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
        $this->app->singleton(Stripe::class,function (){
            return new Stripe(config('services.stripe.secret'));
        });
    }
}