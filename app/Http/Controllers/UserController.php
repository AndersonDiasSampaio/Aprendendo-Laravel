<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
class UserController extends Controller
{
    public function listUser(){
        /* $user= new User();
        $user->email='anderson.dias.sampaio@gmail.com';
        $user->name='Anderson';
        $user->password=Hash::make(123);
        $user->save();*/
        $users= User::all();         
        return view('user', ['users'=>$users]);
    }
    //
}
