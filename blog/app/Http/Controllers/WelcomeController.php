<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        return 'welcome';
    }

    public function test(){
        return view('test');
    }
}
