<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        

        return ;
    }
    public function showUsers(){
        $users = User::all();
        return view('welcome',['users'=>$users,'zhas'=>'Zhas']);
    }
}
