@extends('layout')

@section('title', "$title")

@section('content')
<h1>{{ $title }}</h1>
<ul>
    @forelse ($users as $user)
    <li>
        {{ $user->name }}, {{ $user->document }}, {{ $user->email }}, {{ $user->address }}
        <a href="{{ action('UserController@edit', ['id'=> $user->id]) }}">Editar...</a>
        <a href="{{ action('UserController@delete', ['id'=> $user->id]) }}">Eliminar...</a>
        <a href="{{ action('UserController@show', ['id'=> $user->id]) }}">Ver detalles...</a>
    </li>
    @empty
    <li>No hay usuarios registrados.</li>
    @endforelse
</ul>
@endsection