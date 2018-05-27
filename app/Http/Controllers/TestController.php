<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
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
       return redirect('response_test')->withInput(request()->all());
    }

    public function pdf_download()
    {
        $file = public_path() . '/download/testfile.pdf';
        $header = ['Content-Type:Application/pdf'];
        return response()->download($file,'testing.pdf',$header);
    }

    public function sharedfirst()
    {
        return view('partials.first');
    }

    public function sharedsecond()
    {
        return view('partials.second');

    }

    public function sharedthird()
    {
        return view('partials.third');
    }
}
