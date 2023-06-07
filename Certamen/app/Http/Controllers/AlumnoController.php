<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
        //dd('Hola mundo'); //dump and die
        return view('alumno.alumno');
    }

    /* public function inicio(){
        return view('bienvenida.index');
    } */
}