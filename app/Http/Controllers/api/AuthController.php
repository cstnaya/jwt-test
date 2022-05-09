<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->only(['email', 'password']);

        if (!Auth::attempt($creds)) {
            return response()->json(['error' => "incorrect email, password"], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['token' => $token]);
    }

    public function me(Request $request)
    {
        // $request contains Bearer token
        return $request->user();
    }
}
