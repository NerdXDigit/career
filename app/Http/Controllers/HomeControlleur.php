<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlleur extends Controller
{
    //

    public function homepage(Request $request) {
        return view('home');
    }

    public function loginpage(Request $request) {
        return view('login');
    }

    public function registerpage(Request $request) {
        return view('register');
    }

    public function opportunitiespage(Request $request) {
        return view('opportunities');
    }
}
