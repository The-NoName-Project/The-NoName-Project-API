<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetailSalesRequest;
use App\Http\Requests\UpdateDetailSalesRequest;
use App\Models\DetailSales;
use App\Models\Sales;
use App\Models\Products;

class DetailSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailSales = DetailSales::all();
        
        return view('details.index', compact('detailSales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $details=new DetailSales;
        $products = Products::select('id', 'name')->orderBy('name')->get();
        $sales = Sales::all(); 
        return view('details.add', compact('details', 'products', 'sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetailSalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailSalesRequest $request)
    {
        DetailSales::create([
            'cantidad'=>$request->cantidad,
            'subtotal'=>$request->subtotal,
            'sales_id'=>$request->sales_id,
            'products_id'=>$request->products_id,
        ]);
        
        return redirect('/details')->with('message', 'El detalle de venta se ha agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailSales  $detailSales
     * @return \Illuminate\Http\Response
     */
    public function show(DetailSales $detailSales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailSales  $detailSales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details=DetailSales::find($id);
        $products = Products::select('id', 'name')->orderBy('name')->get();
        $sales = Sales::all(); 
        return view('details.edit', compact('details', 'products', 'sales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailSalesRequest  $request
     * @param  \App\Models\DetailSales  $detailSales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailSalesRequest $request, DetailSales $details,$id)
    {
        $details=DetailSales::find($id);
        $details->update($request->all());
        
        return redirect('/details')->with('messageUpdate', 'El detalle de venta se ha actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailSales  $detailSales
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailSales $detailSales)
    {
        $detailSales->delete();
        return redirect('/details')->with('messageDelete', 'El detalle de venta se ha eliminado exitosamente!');
    }
}
