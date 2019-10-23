<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Store;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creo un nuevo objeto 'producto'
        $product = new Product;
        // Guardo cada parametro del formulario en el respectivo campo del objeto
        $product->name = $request->name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->link = $request->link;
        $product->photo = $request->photo;
        // Cojo el id de la tienda relacionada al producto por medio de la sesion
        $product->store_id = Auth::store()->id;
        // Guardo el objeto
        $product->save();
        // Vuelvo a la vista tienda con un mensaje de confirmación de que se ha creado correctamente el producto
        return back()->with('confirmation','Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Busco el producto con el id en cuestión
        var_dump($id);
        $product = Product::find($id)->get();
        var_dump($product[$id-1]);
        return view('producto')->with(['product' => $product[$id-1]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->price = $request->input('price');
        $product->link = $request->input('link');
        $product->photo = $request->input('photo');
        $product->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        var_dump($id);
        Product::destroy($id);
        return back();
    }
}
