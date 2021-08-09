<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as Validator;
use App\User;

class registerController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }
    public function action(Request $request)
    {
        $user = $request->username;
        $pass = $request->password;
        $email = $request->email;
        $name = $request->name;
        $baru = new User();
        $baru->name = $name;
        $baru->username = $user;
        $baru->email = $email;
        $baru->password = md5($pass, false);
        $baru->save();

    }
}
