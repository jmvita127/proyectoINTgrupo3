<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::all();
      return view('listadoProducts')->with(['products' => $products]);
    }

    public function create()
    {
      return view('create');
    }

    public function save(Request $request)
    {
      $this->validate($request,
      [
        'name' => 'required|unique:products',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'description' => 'required',
      ],

      [
        'name.required' => 'El nombre es Obligatorio',
        'name.unique' => 'El nombre ya existe',
        'price.required' => 'El precio es Obligatorio',
        'price.numeric' => 'Ingrese solo numeros',
        'stock.required' => 'Completar cantidad del proucto',
        'stock.numeric' => 'Ingrese solo numeros',
        'description.required' => 'Completar descripcion',

      ]);
      Product::create(
        [
          'name' => $request->input('name'),
          'price' => $request->input('price'),
          'stock' => $request->input('stock'),
          'description' => $request->input('description'),
        ]
      );

      return redirect('/products')->with('mensaje', 'Producto guardado exitosamente!');
    }

}
