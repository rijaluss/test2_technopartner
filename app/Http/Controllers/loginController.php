<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    public function action(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $data = User::where([
            'username' => $username,
            'password' => md5($password,false)
        ])->first();
        if($data){
            Auth::login($data);
            return redirect()->route('home');
        }else{
            return redirect('/login');
        }
    }
}
