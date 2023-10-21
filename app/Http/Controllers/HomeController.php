<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('clients.dashboard');
    }
    public function create_invitation(){
        return view('clients.create_invitation');
    }
}
