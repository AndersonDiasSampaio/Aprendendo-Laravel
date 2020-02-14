<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function listUser(){
         $user= new User();
          $user->name= "Númer1al";
        $user->email= "aind1avoucomersimonegaldino@gmail.com";
        $user->password= Hash::Make("123");
        $user->save();
        echo "<h1=>Listagem de Usuário</h1>";
    }
    //
}
