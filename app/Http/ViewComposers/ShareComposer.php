<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use Auth;

class ShareComposer
{
    public function compose (View $view)
    {
        $view->with('married',random_int(0,1));
        if(Auth::check()){
            $view->with('user', Auth::user());
        }
    }
}