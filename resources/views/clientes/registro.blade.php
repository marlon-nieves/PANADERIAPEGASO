@extends('layouts.base')
@section('content')
<br>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="row">
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="text-center">Registrate para realizar tu compra</h1>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:#ECF0F1">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="">
                  
                        <div class="form-group">
                            <label for="staticDocument">TIPO DE DOCUMENTO</label>
                            
                                <select class="form-control">
                                    <option>Cedula de ciudadania</option>
                                    <option>Cedula de extranjeria</option>
                                </select>

                        </div>
                        <div class="form-group">
                            <label for="name">NOMBRE</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">APELLIDO</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">DIRECCION</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">TELEFONO</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">CORREO</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">CONTRASEÑA</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                    </form>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                        <a class="btn btn-primary" href="/registro" role="button">REGISTRARSE</a>
                            <a class="btn btn-success" href="/productos" role="button">CANCELAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection