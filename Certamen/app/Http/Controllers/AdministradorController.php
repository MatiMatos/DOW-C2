<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class Inicio extends Controller
{
    public function index(){
        //dd('Hola mundo'); //dump and die
        return view('administrador.admin');
    }
}