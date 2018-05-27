<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class TestController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except([
        //     'login',
        // ]);
    }
    public function first()
    {
        return 'First';
    }

    public function second()
    {
        return 'second';
    }

    public function index()
    {
       return 'First';
    }

    public function index2()
    {
        return 'Second';
    }

    public function login()
    {
       $this->validate(request() , [
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);

       //if passed
       return redirect('response_test')->withInput(
        [
            'username'        => request('username'),
            'password'        => request('password'),
            'retype_password' => request('password_confirmation'),
        ]
    );
    }
}
