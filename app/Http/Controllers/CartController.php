<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function addToCart($id, Request $request)
  {
    $user= User::find($id);

    $user->carrito()->attach($request->product_id, ['quantity=>1']);

    return redirect ('cart')->with('mensaje', 'Producto agregado exitosamente!');

  }

}
