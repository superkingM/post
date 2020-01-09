<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected $redirectTo = '/admin';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'name';
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function attemptLogin(Request $request)
    {
        $username = $request->input('name');
        $password = $request->input('password');

        // 验证用户名登录方式
        $usernameLogin = $this->guard()->attempt(
            ['name' => $username, 'password' => $password], $request->filled('remember')
        );
        if ($usernameLogin) {
            return true;
        }
        // 验证邮箱登录方式
        $emailLogin = $this->guard()->attempt(
            ['email' => $username, 'password' => $password], $request->filled('remember')
        );
        if ($emailLogin) {
            return true;
        }

        return false;
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha',
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/admin/login');
    }

}
