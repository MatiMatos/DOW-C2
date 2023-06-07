<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profesor extends Controller
{
    public function index(){
        //dd('Hola mundo'); //dump and die
        return view('profesor.profesor');
    }
}