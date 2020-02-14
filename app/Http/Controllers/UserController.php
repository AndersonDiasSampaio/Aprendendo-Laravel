<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
class UserController extends Controller
{
    public function listUser(){
        $users= User::all();        
        return view('user', ['users'=>$users]);
    }
    //
}
