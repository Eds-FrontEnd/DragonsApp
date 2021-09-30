<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Http;

class ApiWeb extends Controller
{
    //
    public function index(){
        $response = Http::get('http://5c4b2a47aa8ee500142b4887.mockapi.io/api/v1/dragon');
        dd($response->json());
        
    }
}
