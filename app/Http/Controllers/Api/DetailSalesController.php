<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailSales;

class DetailSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $detail=DetailSales::all();
     return response()->json($detail);   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new DetailSales;
        $detail->cantidad = $request->input('cantidad');
        $detail->subtotal= $request->input('subtotal');
        $detail->sales_id = $request->input('sales_id');
        $detail->products_id = $request->input('products_id');
        $detail->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id=DetailSales::find($id);
        return response()->json($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=DetailSales::find($id);
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
        $id=DetailSales::find($id);
        $id->cantidad = $request->input('cantidad');
        $id->subtotal= $request->input('subtotal');
        $id->sales_id = $request->input('sales_id');
        $id->products_id = $request->input('products_id');
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
        $id=DetailSales::find($id);
        $id->delete();
    }
}
