<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminlistasController extends Controller
{
    public function index()
    {
        return view('admin.listas');
    }
    public function edit()
    {
        return view('admin.editar_listas');
    }
}
