<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\User;

class ApiSalesController extends ApiController
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::all();
        //return response()->json($sales);
        return $this->showAll($sales, 200);
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
        $sales->cliente_id = $request->input('cliente_id');
        $sales->vendedor_id = $request->input('vendedor_id');
        $sales->save();
        return $this->showMessage('Venta creada', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sales::find($id);
        //return response()->json($sale);
        return $this->showOne($sale, 200);
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
        $id->update($request->all());
        //return $id;
        return $this->showUpdate('Venta actualizada', 200);
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
        return $this->showDelete('Venta eliminada', 200);
    }
}
