<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addController extends Controller
{
    public function index()
    {
        return view('add');
    }
    public function check(Request $req)
    {
            $valid=$req->validate([
                'subject'=>'required|min:4|max:128'
            ]);
    }
}
