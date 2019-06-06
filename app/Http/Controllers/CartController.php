<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
  public function addToCart($id, Request $request)
  {
    $user= User::find($id);

    $user->carrito()->attach($request->product_id, ['quantity=>1']);

    return redirect ('/carrito/');

  }
}
