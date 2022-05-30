<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\SubUser;

class WebThermalController extends Controller
{
    public function index()
    {
        return redirect('thermal/dashboard');
    }

    public function login_wt_token($token)
    {
        if (Auth::guard('web')->check()) {
            $account = Auth::guard('web')->user()->name;
            
            if ($user = SubUser::where('account', $account)->first()) {
                $id = $user->id;
                Auth::guard('web-thermal')->loginUsingId($id, true);

                return redirect('thermal/dashboard');
            }
        }

        return $this->login($err = "憑證失敗。");
    }

    public function login($err = null)
    {
        if ($err) {
            return view('thermal.login')->withErrors(['error' => $err]);
        }

        return view('thermal.login');
    }

    public function dashboard()
    {
        return view('thermal.dashboard');
    }

    public function detail()
    {
        return view('thermal.detail');
    }

    public function post_login(Request $request)
    {
        $creds = $request->only(['account', 'password']);
        
        if (!$user = Auth::guard('web-thermal')->attempt($creds)) {
            return Redirect::back()->withErrors(['incorrect' => "incorrect account / password."]);    
        }
        return redirect('/thermal/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web-thermal')->logout();

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

        return redirect("thermal/login");
    }
}
