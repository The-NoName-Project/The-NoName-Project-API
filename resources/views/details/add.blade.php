@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="row  justify-content-center">
        <div class="col-8">
            <form method="POST" action="{{ route('details.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Crear Detalle de Venta</h4>
                        <!-- <p class="card-category">User information</p> -->
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Cantidad</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="cantidad" id="cantidad" type="number"
                                        placeholder="Cantidad" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Subtotal</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="subtotal" id="subtotal" type="number"
                                        placeholder="Subtotal" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="products_id" class="col-sm-2 col-form-label">Producto</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="products_id" id="products_id">
                                    <option selected value="">Selecciona</option>
                                    @foreach($products as $producto)
                                        <option value="{!! $producto->id !!}">{{ $producto->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="sales_id" class="col-sm-2 col-form-label">Venta</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="sales_id" id="sales_id">
                                    <option selected value="">Selecciona</option>
                                    @foreach($sales as $sale)
                                        <option value="{!! $sale->id !!}">{{ $sale->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" id="btn-guardar" class="btn btn-primary">guardar</button>
                <a href="/" class="btn btn-danger" type="button">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
