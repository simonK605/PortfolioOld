<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function registration(Request $request){
        if(User::where('email', $request['email'])->exists()){
            return redirect(route('registration'));
        }

        $user = User::create([
            'name' => $request['name'],
            'last_name' => $request['lastName'],
            'email' => $request['email'],
            'login' => $request['login'],
            'password' => bcrypt($request['password'])
        ]);
        if($user){
            auth('web')->login($user);
        }
        return redirect(route('index'));
    }





    public function login(Request $request){
        $data = $request->validate([
            'login' => ['required', 'min:4', 'max:10'],
            'password' => ['required', 'min:4']
        ]);
        if(auth('web')->attempt($data)){
            return redirect(route('index'));
        }
        else{
            return redirect()->back();
        }
    }






    public function logout(){
        auth("web")->logout();
        return redirect(route('index'));
    }
}
