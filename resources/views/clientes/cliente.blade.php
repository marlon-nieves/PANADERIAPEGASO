@extends('layouts.base')
@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <h1 class="text-center">Bienvenido ingresa para realizar tu compra</h1>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:#ECF0F1">
                <div class="card-header">Ingresar</div>

                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre de usuario</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" name="name">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                       Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Iniciar Sesion
                                </button>
                                    <a class="btn btn-link" href="">
                                       ¿Olvidaste tu contraseña?
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection