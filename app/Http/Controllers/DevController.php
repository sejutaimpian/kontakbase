<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevController extends Controller
{
    public function index()
    {
        return view('dev');
    }
    public function post(Request $request)
    {
        dd($request->all());
    }
}
