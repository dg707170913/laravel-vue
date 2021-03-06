<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * 在登录后重定向用户的地方。
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     * 创建一个新的控制器实例。
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
