<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('welcome' , compact('users'));
    }

    public function get(User $user)
    {
        return $user;
    }

    public function login()
    {
        return 'Login Form';
    }
}
