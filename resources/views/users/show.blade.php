@extends('layout')

@section('title', "Detalles usuario")

@section('content')
<h1 class="pb-1">{{ $title }}</h1>
<div class="form-control">
    <div class="container">
        <p>
            <br>
            Id: {{ $user->id }}<br>
            Nombre: {{ $user->name }}<br>
            Documento: {{ $user->document }}<br>
            Correo: {{ $user->email }}<br>
            Dirección: {{ $user->address }}<br>
            <br>
            <a href="{{ action('UserController@home') }}"><span class="oi oi-action-undo"></span> Regresar...</a>
        </p>
    </div>
</div>
@endsection