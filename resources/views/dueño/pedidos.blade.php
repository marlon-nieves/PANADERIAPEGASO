@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-primary text-center">PEDIDOS</h1>
    </div>
</div>
<div class="row">
    <div class="col text-left">
        <a href="/dueño" class="btn btn-danger"> Atras </a>
    </div> 
</div>
<br>
<div class="row">
    <div class="col">
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">IdPedido</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Metodo de Pago</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection