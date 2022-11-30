<?php

namespace Module\Dashboard\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use \Module\Auth\Action\Auth;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    public function showLoginForm()
    {
        return view('dashboard::pages.login');
    }
    protected function guard()
    {
        return Auth::guard('admins');
    }
}
