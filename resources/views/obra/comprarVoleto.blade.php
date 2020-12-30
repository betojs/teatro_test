
@extends('layout')

@section('title')
Comprar Voleto
@endsection
@section('content')

    <h1>Comprar Voleto</h1>

@include('partials.validationErrors')
<div class="container-sm">
    <div class="row row-cols-1">
        <div class="col-5">
<div class="card">
    <div class="card-body">
 

<form method="POST" action="{{route('venta.store', $obra)}}">

    @csrf
    
    <label for="" >Codigo de Obra: 
    <input type="text" name="cod_obra" value="{{$obra->cod_obra}}" readonly class="form-control-plaintext" >
    </label><br>
    <label for="">Fecha:
    <input type="datetime" name="fecha_compra" value="{{date('Y-m-d H:i:s')}}" readonly class="form-control-plaintext">

    </label><br><br>
    <label for="">Nombre de Comprador:
    <input type="text" name="comprador" value="">
    </label><br><br>


    <button class="btn btn-outline-success">Guardar</button>

</form>
</div>
</div>
</div>
<div class="d-grid gap-2 d-md-flex ">
    <a href="{{route('obra.index')}}" class="btn btn-outline-success ">Atras</a>
  </div>
</div>
</div>
@endsection