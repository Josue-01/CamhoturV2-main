<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    //variable que apunta hacia el dashboard
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        //tiene la misma ruta que la variable $redirectTo
        return redirect()->intended('/dashboard');
    }

    $errors = [];

    if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $errors['email'] = 'El correo electrónico o la contraseña son incorrectos.';
    }

    return redirect()->back()->withErrors($errors);
}

}
