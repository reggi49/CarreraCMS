<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MemberLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:member');
    }

    public function showLoginForm()
    {
        return view('auth.member-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6' 
        ]);

        if(Auth::guard('member')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return redirect()->intended(route('member.home'));
        }

        return redirect()->back()->withInput($request->only('email'));
    }
}
