<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Controller\Auth\MemberLoginController as MemberLogin;

class MemberController extends Controller
{
    protected $limit = 10;

    public function __construct()
    {
        $this->middleware('auth:member');
    }

    public function index()
    {
        return view('member.home');
    }
}
