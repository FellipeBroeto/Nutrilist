<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listasController extends Controller
{
    public function index()
    {
        return view('listas');
    }
}
