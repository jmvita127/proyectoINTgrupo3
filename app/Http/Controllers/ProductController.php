<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

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

    public function edit($id)
   {
     $cosa = Product::find($id);

       return view('edit')->with([
           'product' => $cosa
         ]);
   }

   public function update($id, Request $request)
   {
     $this->validate($request,
       [
         'name'=>'required',
       ],
       [
         'required' => 'Campo obligatorio',
       ]);
       $productoAEditar = Product::find($id);
        //le cambio los atributos o valores al objeto que me traje arriba
        $productoAEditar->name = $request->name;

        //lo mando a guardar
        $productoAEditar->save();

    }


    public function save(Request $request)
    {
      $this->validate($request,
      [
        'name' => 'required|unique:Products',
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

      return redirect('/products');
    }

    public function showCart()
    {
      return view('cart');
    }

    

}
