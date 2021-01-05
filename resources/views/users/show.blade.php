@extends('layout')

@section('title', "$title")

@section('content')
<div class="container">
    <h1>{{ $title }} # {{$user->id}}</h1>
    <ul>
        <li>
            <p>
                Usuario<br>
                Nombre: {{$user->name}}<br>
                Documento: {{$user->document}}<br>
                Correo: {{$user->email}}<br>
                Dirección: {{$user->address}}<br>
            </p>
        </li>
    </ul>
    <p>
        <a href="{{ action('UserController@index') }}">Regresar...</a>
    </p>
</div>
@endsection