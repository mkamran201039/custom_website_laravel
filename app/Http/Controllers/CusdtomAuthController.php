<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CusdtomAuthController extends Controller
{
    public function login(){
            return view("auth.login");
    }

    public function registration(){
            return view("auth.registration");
    }

    public function register(Request $request){
          echo "value added \n ";
          echo $request->input('name');

          $user = new User();
          $user->name=$request->name;
          $user->email=$request->email;
          $user->password=Hash::make($request->password);

          $user->save();
    }
}
