<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /*     public function welcome()
    {
        return view('custom-welcome');
    } */

    public function customWelcome()
    {
        return view('custom-welcome');
    }
}
