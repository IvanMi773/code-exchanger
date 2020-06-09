<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function index()
    {
        return view('app.welcome');
    }

    public function howItWorks()
    {
        return view('app.how_it_works');
    }
}
