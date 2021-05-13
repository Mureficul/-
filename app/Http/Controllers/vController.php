<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vController extends Controller
{
    public function index()
    {
        return view('v');
    }
}
