<?php

namespace App\Http\Controllers\sub;

use App\Http\Controllers\sub\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->only(['account', 'password']);

        if (!$token = auth()->attempt($creds)) {
            return response()->json(['error' => "Incorrect account/password."], 401);
        }

        return response()->json(['token' => $token]);
    }
}
