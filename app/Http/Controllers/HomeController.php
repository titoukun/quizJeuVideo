<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home/home");
    }

    public function apropos()
    {
        return view("home/apropos");
    }
}
