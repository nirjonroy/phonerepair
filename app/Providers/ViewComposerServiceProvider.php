<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\ServiceCategoryComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('Frontend.Partials.header', ServiceCategoryComposer::class);
    }

    public function register()
    {
        //
    }
}
