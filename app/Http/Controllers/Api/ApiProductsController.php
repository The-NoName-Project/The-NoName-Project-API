<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
class ApiProductsController extends ApiController{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        //return response()->json($products, 200);
        return $this->showAll($products, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Products;
        $products->name = $request->input('name');
        $products->precio_sale = $request->input('precio_sale');
        $products->existencias = $request->input('existencias');
        $products->stock= $request->input('stock');
        $products->category_id = $request->input('category_id');
        $products->save();
        return $this->showMessage('Producto creado correctamente', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::find($id);
        return $this->showOne($products, 200);
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
        $id = Products::find($id);
        $id->update($request->all());
        return $this->showUpdate('Producto actualizado correctamente', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Products::find($id);
        $id->delete();
        return $this->showDelete('Producto eliminado correctamente', 200);
    }
}