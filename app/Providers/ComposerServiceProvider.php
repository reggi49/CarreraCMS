<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Views\Composers\NavigationComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'blog.partials.lastest-articles',
            'blog.partials.topics-update',
            'blog.partials.related-articles',
            'blog.partials.popular-tags',
            'blog.partials.videos'
        ], NavigationComposer::class);
        // view()->composer('layouts.sidebar',function($view){
        //     $categories = Category::with(['posts'=>function($query){
        //     $query->published();
        // }])->orderBy('title','asc')->get();

        // return $view->with('categories', $categories);
        // });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
