<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserAuthController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function displayRegisterPage()
    {
        return view("register");
    }

    public function registerUser(Request $request){
        $user = new User();
        $user->password = Hash::make($request->input("password"));
        $user->email = $request->input("email");
        $user->name = $request->input("name");

        $user->save();

        return view("login");
    }

    public function displayLoginPage()
    {
        return view("login");
    }

    public function homepage() {
        return view("listbuilder");
    }

    public function authenticate(Request $request) : RedirectResponse{

        $credentials = $request ->validate([
            'email' => ['required', 'email'],
            'password'=> ['required'] 
        ]);

        if (Auth::attempt($credentials)){
            $request-> session()->regenerate();
            return redirect()->intended("/listbuilder");
        }

        return back()->withErrors([
            'email'=> "The provided credentials dont match our records"
        ])->onlyInput("email");
    }

    public function logout(Request $request): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/login");
    }
}
