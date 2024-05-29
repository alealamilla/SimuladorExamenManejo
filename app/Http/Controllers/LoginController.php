<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request) {
        // Extract credentials from the request
        $credentials = $request->only('email', 'password');
        dump($credentials); 

        if (Auth::attempt($credentials)) {
            // Regenerate the session ID to prevent session fixation attacks
            $request->session()->regenerate();

            return response()->json('authenticated');
        } else {
            return response()->json(['message' => 'Usuario y/o contraseña incorrectos'], 404);
        }
    }

    

    function logout(){
        Auth::logout();

        return redirect()->route("login.view");
    }
}
