<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSalesRequest;
use App\Http\Requests\UpdateSalesRequest;
use App\Models\Sales;
use App\Models\Products;
use App\Models\Category;
use App\Models\User;

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
        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Products::select('id', 'name')->orderBy('name')->get();
        $users = User::select('id', 'name')->orderBy('name')->get();
        $sales=new Sales;
        return view('sales.add', compact('products', 'users', 'sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalesRequest $request)
    {
        Sales::create([
            'total_articles'=>$request->total_articles,
            'total_price'=>$request->total_price,
            'subtotal'=>$request->subtotal,
            'cliente_id'=>$request->cliente_id,
            'vendedor_id'=>$request->vendedor_id, 
        ]);
        return redirect('/sales')->with('message', 'La venta se ha agregado exitosamente!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::select('id', 'name')->orderBy('name')->get();
        $users = User::select('id', 'name')->orderBy('name')->get();
        $sales=Sales::find($id);
        return view('sales.edit', compact('sales', 'products', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesRequest  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalesRequest $request, Sales $sales,$id)
    {
        $sales=Sales::find($id);
        $sales->update($request->all());
        return redirect('/sales')->with('message', 'La venta se ha actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        $sales->delete();
        return redirect('/sales')->with('messageDelete', 'La venta se ha eliminado exitosamente!');
    }
}
