<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::paginate(9);

      //$products = Product::all();

      return view('listadoProducts')->with(['products' => $products]);
    }

    public function create()
    {
      return view('create');
    }

    public function edit($id)
   {

     $cosa = Product::find($id);

       return view('edit')->with(['product' => $cosa]);
   }

   public function update($id, Request $request)
   {
     $this->validate($request,
       [
         'name'=>'required',
         'price' => 'required|numeric',
         'stock' => 'required|numeric',
         'description' => 'required',
         'imagen' => 'required|image',
       ],
       [
         'name.required' => 'El nombre es obligatorio',
         'name.unique' => 'El nombre ya existe',
         'price.required' => 'El precio es obligatorio',
         'price.numeric' => 'Ingrese solo numeros',
         'stock.required' => 'Completar cantidad del proucto',
         'stock.numeric' => 'Ingrese solo numeros',
         'description.required' => 'Completar descripcion',
         'imagen.image' => 'Extension no valida como Imagen',
         'imagen.required' => 'La imagen es obligatoria',
       ]);

       $path= $request->file('imagen')->store('public');
       $imagen= basename($path);


       $productoAEditar = Product::find($id);
        //le cambio los atributos o valores al objeto que me traje arriba
        $productoAEditar->name = $request->name;
        $productoAEditar->price = $request->price;
        $productoAEditar->stock = $request->stock;
        $productoAEditar->description = $request->description;
        $productoAEditar->imagen = $imagen;

        //lo mando a guardar
        $productoAEditar->save();

        return redirect('/products');
    }


    public function save(Request $request)
    {
      $this->validate($request,
      [
        'name' => 'required|unique:Products',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'description' => 'required',
        'imagen' => 'required|image',
      ],

      [
        'name.required' => 'El nombre es obligatorio',
        'name.unique' => 'El nombre ya existe',
        'price.required' => 'El precio es obligatorio',
        'price.numeric' => 'Ingrese solo numeros',
        'stock.required' => 'Completar cantidad del proucto',
        'stock.numeric' => 'Ingrese solo numeros',
        'description.required' => 'Completar descripcion',
        'imagen.image' => 'Extension no valida como Imagen',
        'imagen.required' => 'La imagen es obligatoria',

      ]);

        $path= $request->file('imagen')->store('public');
        $imagen= basename($path);


      Product::create(
        [
          'name' => $request->input('name'),
          'price' => $request->input('price'),
          'stock' => $request->input('stock'),
          'description' => $request->input('description'),
          'imagen'=> $imagen,

        ]
      );

      return redirect('/products');
    }



    public function showCart()
    {
      return view('cart');
    }

    public function show($id)
   {
     $productoAEliminar = Product::find($id);

       return view('deleteProduct')->with(['product' => $productoAEliminar]);
   }

    public function delete(Request $request)
    {
      $id = $request['id'];

      $productoAEliminar = Product::find($id);

      $productoAEliminar->delete();

      return redirect('/products');

    }




}
