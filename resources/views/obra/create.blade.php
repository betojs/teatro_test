
@extends('layout')

@section('title')
Crear Obra
@endsection
@section('content')

    <h1 style="margin-left: 20%">crear Obra</h1>

@include('partials.validationErrors')
<div class="container-sm">
    <div class="row row-cols-1">
        <div class="col-5">
<div class="card">
    <div class="card-body">
<form method="POST" action="{{route('obra.store')}}">

    @csrf
    <label for="">titulo del proyecto: 
    <input type="text" name="nombre" value="">
    </label><br><br>
    <label for="">Fecha:
    <input type="datetime" name="fechaobra" value="2020-12-31T19:30">
    </label><br><br>
    <label for="">asientos disponibles:
    <input type="number" name="disponibles" value="">
    </label><br><br>
    <label for="">Sala:
    <input type="text" name="sala" value="">
    </label><br><br>
    <label for="">aforo:
    <input type="number" name="aforo" value="">
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