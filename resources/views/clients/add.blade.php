@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="POST" action="{{route('clients.store', ['id'=>$user->id])}}" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Crear Cliente</h4>
                            <!-- <p class="card-category">User information</p> -->
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="name"  id="title" type="text" placeholder="Nombre" required aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Apellido Paterno</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="app"  id="title" type="text" placeholder="Apellido Paterno" required aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Apellido Materno</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="apm"  id="title" type="text" placeholder="Apellido Materno" required aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="email"  id="title" type="email" placeholder="example@example.com" required aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="password"  id="title" type="password" placeholder="********" required aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="subtitle" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="fn" id="fn" type="date"  required aria-required="true">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <label for="subtitle" class="col-sm-2 col-form-label">Numero Telefonico</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="phone" id="phone" type="number" placeholder="Numero telefonico" required aria-required="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" id="btn-guardar" class="btn btn-primary">Guardar</button>
                </form>
            </div>

        </div>
    </div>
@endsection
