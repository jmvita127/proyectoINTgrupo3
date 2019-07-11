<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Cart;

class IndexController extends Controller
{
    public function home(){
      {
        $products = Product::paginate(6);

        // $products = Product::all();

        return view('index')->with(['products' => $products]);
      }
    }

}
