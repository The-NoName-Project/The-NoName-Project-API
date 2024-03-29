@extends('layouts.app')

@section('content')
<div class="container justify-content-center">
    <div class="row  justify-content-center">
        <div class="col-8">
            <form method="POST" action="{{ route('product.store') }}" class="form-horizontal">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Crear artículo</h4>
                        <!-- <p class="card-category">User information</p> -->
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label for="title" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="name" id="title" type="text" placeholder="Nombre"
                                        required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Existencias</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="existencias" id="existencias" type="number"
                                        placeholder="Existencias" required aria-required="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="stock" id="stock" type="number"
                                        placeholder="Stock" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="precio_sale" id="precio_sale" type="number"
                                        placeholder="Precio de venta" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Estatus</label>
                            <div class="col-sm-7">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" name="status"
                                        id="flexRadioDefault1" value="Activo">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Activo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" name="status"
                                        id="flexRadioDefault2" value="Inactivo" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Inactivo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="category_id" class="col-sm-2 col-form-label">Categoría</label>
                            <div class="col-sm-7">
                                <select class="form-group bmd-form-group" name="category_id" id="category_id">
                                    <option selected value="">Selecciona</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{!! $categoria->id !!}">{{ $categoria->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" id="btn-guardar" class="btn btn-primary">guardar</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
