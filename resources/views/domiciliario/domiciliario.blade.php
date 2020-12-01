@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-info text-center">PEDIDOS</h1>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID PEDIDO</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">TOTAL</th>
                        <th scope="col">PEDIDO</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>
@endsection