@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Editar Cliente</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="container">
                                <form action="{{route('clients.update', ['id'=>$user->id])}}" method="POST">
                                    {{-- generar el token para el envio de dato csrf --}}
                                    @csrf
                                    @method('PUT')
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
                                        <input class="form-control" name="name" value="{{ $user->name }}"  id="title" type="text" placeholder="Nombre" required aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Apellido Paterno</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="app"  id="title" type="text" placeholder="Apellido Paterno" required aria-required="true" value="{{$user->app}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Apellido Materno</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="apm"  id="title" type="text" placeholder="Apellido Materno" required aria-required="true" value="{{$user->apm}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="email"  id="title" type="email" placeholder="example@example.com" required aria-required="true" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="title" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="password"  id="title" type="password" placeholder="********" required aria-required="true" value="{{$user->password}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="subtitle" class="col-sm-2 col-form-label">Fecha Nacimiento</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="fn" id="fn" type="date"  required aria-required="true" value="{{$user->fn}}">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <label for="subtitle" class="col-sm-2 col-form-label">Numero Telefonico</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" name="phone" id="phone" type="number" placeholder="Numero telefonico" required aria-required="true" value="{{$user->phone}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="modal-footer">
                                        <a type="button" class="btn btn-secondary" data-bs-dismiss="modal" href="{{route('clients.index')}}">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
