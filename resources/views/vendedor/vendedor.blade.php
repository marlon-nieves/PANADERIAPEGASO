@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
        <h1 class="alert alert-secondary text-center">REGISTRA LA COMPRA</h1>
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
    </div>
    <div class="col-xs-4 col-sm-6 col-md-6 col-lg-6">
        <div class="form-group ">
            <label for="IdProduct">VALOR A PAGAR</label>
            <input type="string" class="form-control" id="valor" name="valor" placeholder="Valor a Pagar" value="{{old('IdProduct')}}">
        </div>
    </div>
    <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
    </div>
</div>
<br>
<div class="row">
    <div class="col text-center">
        <a href="/vendedor/compra" class="btn btn-success"> PAGAR </a>
    </div> 
</div>
@endsection