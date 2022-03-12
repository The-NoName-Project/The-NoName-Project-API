@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form method="POST"
                action="{{ route('sales.store', ['id'=>$sales->id]) }}"
                class="form-horizontal">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Crear Venta</h4>
                        <p class="card-category">Venta de Productos</p>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label for="product_id" class="col-sm-2 col-form-label">Producto</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="product_id" id="product_id">
                                    <option selected value="">Selecciona</option>
                                    @foreach($products as $product)
                                        <option value="{!! $product->id !!}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="vendedor_id" class="col-sm-2 col-form-label">Usuario</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="vendedor_id" id="vendedor_id">
                                    <option selected value="">Selecciona</option>
                                    @foreach($users as $usuario)
                                        <option value="{!! $usuario->id !!}">{{ $usuario->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="cliente_id" class="col-sm-2 col-form-label">Cliente</label>
                            <div class="col-sm-7">
                                <select class="form-select" name="cliente_id" id="cliente_id">
                                    <option selected value="">Selecciona</option>
                                    @foreach($users as $cliente)
                                        <option value="{!! $cliente->id !!}">{{ $cliente->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Total de articulos</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="total_articles" id="total_articles" type="number"
                                        placeholder="Cantidad" required aria-required="true">
                                </div>
                            </div>
                            <div class="row">
                                <label for="subtitle" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="total_price" id="total_price" type="number"
                                            placeholder="Total a pagar" required aria-required="true">
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
                        </div>
                    </div>
                </div>

                <button type="submit" id="btn-guardar" class="btn btn-primary">guardar</button>
                <a href="/" class="btn btn-danger" type="button">Cancelar</a>
            </form>
        </div>

    </div>
</div>
@endsection
