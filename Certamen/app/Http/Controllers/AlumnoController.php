<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AlumnoController extends Controller
{
    public function index(){
        return view('alumno.alumno');
    }

    public function propuesta(){
        return view('alumno.propuesta');
    }
}