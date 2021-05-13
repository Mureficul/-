<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class indexController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function create(Request $request)
    {

        User::create([
            'login' => $request->Login,
            'password' =>Hash::make( $request->psw),
            'email_address' => $request->email,
            'status' => 0,
        ]);
        return redirect( '/Main');
    }
    public function login(Request $request){

        if(Auth::check()){
            return redirect()->intended(route('/Main'));
        }
        $formFields = $request->only([
            'email_address',
            'password'
        ]);

        if (Auth::attempt($formFields)){
            return redirect()->intended(route('/Main'));
        }

        return redirect(route('index'))->withErrors([
            'email'=>'Не удалось авторизироваться'
        ]);
    }
}
