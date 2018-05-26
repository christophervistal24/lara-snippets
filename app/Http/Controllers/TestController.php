<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
