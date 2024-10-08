<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Customer extends Controller
{
    function register()
    {

        return view('customer.register');
    }

    function create(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5|max:12'
        // ]);
        $data = array();
        $data['name'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data;
        DB::table('users')->insert($data);
        return redirect()->route('login.user')->with('success', 'You have successfully registered');
    }

    function login()
    {
        return view('customer.login');
    }
}
