<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

  public function index(){

   return view('carrito');
   }


  public function addToCart( Request $request)
  {
    $user =Auth::user();
    $user->carrito()->attach($request->product_id,
    ['quantity'=>'1', 'date_purchase' => date('Y-m-d')]
  );

    return redirect ('products');

  }

  public function showCart(){

  $user =Auth::user();

  $products= $user->carrito;

  return view('carrito')->with(['products' => $products]);


}

public function deleteToCart( Request $request){

  $user =Auth::user();

  $user->carrito()->detach($request->product_id,['quantity'=>1]);

  return redirect('/carrito');
}

}
