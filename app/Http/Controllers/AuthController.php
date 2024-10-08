<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Hash;
class AuthController extends Controller
{
    public function index(){

        return view('admin.login');
    }

    public function login(Request $request){

            // $hashedEmail = Hash::make('email');
        //$hash = Hash::make('password');

       // dd($hash);
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

        
        //$user = Auth::guard('admin')->attempt($credentials);
        
            //dd($user);
        if(Auth::guard('admin')->attempt($credentials)){
            
           // dd('ok');
            return redirect()->route('/adminDashboard');
        }




    }
}
