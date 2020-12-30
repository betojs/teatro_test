

@extends('layout')

@section('title')
Crear proyecto
@endsection
@section('content')

    <h1>crear proyecto</h1>

@include('partials.validationErrors')
    <form method="POST" action="{{route('projects.store')}}">
        
        @include('projects._form', ['btnText'=>'Guardar'])

    </form>

@endsection