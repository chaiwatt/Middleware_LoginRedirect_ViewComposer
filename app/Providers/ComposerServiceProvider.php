<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
  
    public function register()
    {
        //
    }


    public function boot()
    {
         View::composer('*','App\Http\ViewComposers\ShareComposer');
    }
}
