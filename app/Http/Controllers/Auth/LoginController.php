<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ( $user->permission == '1' ) 
        {
            return redirect()->route('superadmin');
        }
        else if($user->permission == '2')
        {
            return redirect()->route('admin');
        }
        else if($user->permission == '3')
        {
            return redirect()->route('user');
        }else{
            return redirect('home');
        }
    }
        
}
