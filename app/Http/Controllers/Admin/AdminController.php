<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;

class APIController
{
    public function index()
    {
        return 'Namespace Route with namespace : ' . API::class;
    }
}