<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroDeQuejasController extends Controller
{
  public function libroDeQuejas(){
    return view('libroDeQuejas');
  }
}
