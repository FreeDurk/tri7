<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Hash;

class LoginController extends Controller
{   


    public function username()
    {
        return 'username';
    }

    public function login(Request $request){
        
        $creds = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);


        if(Auth::attempt($creds)) {
            return redirect('/list');
        }
        
        return 'false';

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
