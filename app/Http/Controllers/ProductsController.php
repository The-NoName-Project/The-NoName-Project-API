<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;
use App\Models\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto=new Products;
        $categorias = Category::select('id', 'name')->orderBy('name')->get();
        return view('product.add', compact('categorias', 'producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        Products::create([
            'name'=>$request->name,
            'precio_sale'=>$request->precio_sale,
            'existencias'=>$request->existencias,
            'stock'=>$request->stock,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
        ]);
        return redirect('/product')->with('mesage', 'El producto se ha agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Category::select('id', 'name')->orderBy('name')->get();
        $product=Products::find($id);
        return view('product.edit', data: [
            'product'=>$product,
            'categorias'=>$categorias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $product, $id)
    {
        $product=Products::findOrFail($id);
        $product->update($request->all());
        return redirect('/product')->with('mesage', 'el producto se ha actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect('/product')->with('messageDelete', 'El producto se ha eliminado exitosamente!');
    }
}
