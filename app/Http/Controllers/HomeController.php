<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('pages.home');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
