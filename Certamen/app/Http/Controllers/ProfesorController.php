<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< Updated upstream
use Illuminate\Support\Facades\Storage;

=======
>>>>>>> Stashed changes
class ProfesorController extends Controller
{
    public function index(){
        //dd('Hola mundo'); //dump and die
        return view('profesor.profesor');
    }
}
