<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){

        return view('admin.login');
    }

    public function login(Request $request){

        

        // $credentials = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        // ];

        // if (Auth::guard('admin')->attempt($credentials)) {
        //     return redirect(route('admin.dashboard'));
        // } else {
        //     return back()->with('error', 'The provided credentials do not match our records.')->withInput();
        // }



        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth




    }
}
