<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alumno extends Controller
{
    public function index(){
        //dd('Hola mundo'); //dump and die
        return view('alumno.alumno');
    }
}