<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    public function getUser(Request $request)
    {
      $email = $request->input('email');
      if(User::where('email', '=', $email)->first()); //el get trae all, y el first trae solo el primero

      return ['existe '=>true];
    }
      return ['no existe'=>false];

}
