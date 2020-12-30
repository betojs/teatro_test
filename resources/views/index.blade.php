

@extends('layout')
@section('title', 'home')



@section('content')
<h1 style="text-align: center; padding: 20px; background: rgb(228, 200, 200)">Bienvenidos al teatro</h1>
<div class="container">
    <div class="row ">
        <a href="{{route('obra.create')}}">Crear nueva Obra</a>
        
    </div>
    <div class="row">
        @include('obra.card')
    </div>
</div>

{{-- <a href="{{route('obras')}}">Obras</a> --}}
@endsection