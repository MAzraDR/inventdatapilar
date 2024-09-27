<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function viewregister()
    {
        return view('auth/register');
    }

    public function viewlogin()
    {
        return view('auth/login');
    }

    public function actionregister(Request $request)
    {
        $payload = $request->only("name", "email", "password");
        $validate = Validator::make($payload, [
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        $payload["password"] = bcrypt($payload["password"]);

        $user = User::create($payload);
        // $token = $user->createToken("auth_token")->plainTextToken;


        // Redirect ke halaman home atau dashboard
        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function actionlogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Menghapus semua data session
        $request->session()->invalidate();

        // Regenerasi token CSRF untuk keamanan
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
