<?php

namespace App\Providers;
use App\Models\Tag;
use App\Models\Kategori;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['posts.fields'], function ($view) {
            $tagItems = Tag::pluck('tag','id')->toArray();
            $view->with('tagItems', $tagItems);
        });
        View::composer(['posts.fields'], function ($view) {
            $kategoriItems = Kategori::pluck('kategori','id')->toArray();
            $view->with('kategoriItems', $kategoriItems);
        });
        //
    }
}