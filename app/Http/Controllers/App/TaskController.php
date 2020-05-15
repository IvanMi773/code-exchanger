<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        return view('task.create');
    }
}
