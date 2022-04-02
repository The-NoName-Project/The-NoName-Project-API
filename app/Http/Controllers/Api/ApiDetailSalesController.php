<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Products;
use App\Models\DetailSales;

class ApiDetailSalesController extends ApiController
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail=DetailSales::all();
     //return response()->json($detail);   
        return $this->showAll($detail, 200);
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
        return $this->showMessage('Detalle de venta creado correctamente', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deta=DetailSales::find($id);
        //return response()->json($deta);
        return $this->showOne($deta, 200);
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
        $id->update($request->all());
        //return $id;
        return $this->showUpdate('Detalle de venta actualizado correctamente', 200);
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
        return $this->showDelete('Detalle de venta eliminado correctamente', 200);
    }
}
