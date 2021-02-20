<?php

namespace App\Providers;

use App\Http\View\Composers\DashboardComposer;
use App\Http\View\Composers\WebsiteComposer;
use Illuminate\Support\Facades\View;
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
        View::composer([
            'dashboard.layouts.side-nav'
        ] , DashboardComposer::class);

        View::composer([
            'website.index',
            'website.contact',
            'website.chunks.socials',
            'website.layouts.map',
            'website.layouts.header',
            'website.meals.index',
            'website.layouts.footer',
            'website.branches.show',
            'website.albums.show',
            'website.meals.show',
            'website.about'
        ] , WebsiteComposer::class);
    }
}
