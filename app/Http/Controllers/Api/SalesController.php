<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Products;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::all();
        return response()->json($sales);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sales = new Sales;
        $sales->total_articles = $request->input('total_articles');
        $sales->total_price = $request->input('total_price');
        $sales->subtotal = $request->input('subtotal');
        $sales->cliente_id = $request->input('cliente_id');
        $sales->vendedor_id = $request->input('vendedor_id');
        $sales->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar una sola venta
        $id = Sales::find($id);
        return response()->json($sale);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=Sales::find($id);
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
        $id=Sales::find($id);
        $id->total_articles = $request->input('total_articles');
        $id->total_price = $request->input('total_price');
        $id->subtotal = $request->input('subtotal');
        $id->cliente_id = $request->input('cliente_id');
        $id->vendedor_id = $request->input('vendedor_id');
        $id->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id=Sales::find($id);
        $id->delete();
    }
}
