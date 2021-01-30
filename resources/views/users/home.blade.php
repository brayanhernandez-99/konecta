@extends('layout')

@section('title', "Home")

@section('content')
<div class="d-flex justify-content-between align-items-end mb-3">
    <h1 class="pb-1">{{ $title }}</h1>
    <p>
        <a class="btn btn-link btn-primary" href="{{ action('UserController@register') }}"><span class="oi oi-person"> Nuevo usuario</span></a>
    </p>
</div>

@if ($users->isNotEmpty())
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Documento</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->document }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>
                <a class="btn btn-link btn-primary" href="{{ action('UserController@show', ['id'=> $user->id]) }}"><span class="oi oi-eye"></span></a>
                <a class="btn btn-link btn-primary" href="{{ action('UserController@edit', ['id'=> $user->id]) }}"><span class="oi oi-pencil"></span></a>
                <a class="btn btn-link btn-primary" href="{{ action('UserController@delete', ['id'=> $user->id]) }}"><span class="oi oi-trash"></span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No hay usuarios registrados.</p>
@endif

@endsection