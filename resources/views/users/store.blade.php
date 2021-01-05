
@extends('layout')

@section('title', "Usuario {$data['name']}")

@section('content')


    <h1>{{ $title }}</h1>
    <ul><li>Name: {{$data['name']}}</li></ul>
    <ul><li>Document: {{$data['document']}}</li></ul>
    <ul><li>Email: {{$data['email']}}</li></ul>
    <ul><li>Direccion: {{$data['address']}}</li></ul>

    <p>
        <a href="{{ action('UserController@index') }}">Regresar...</a>
    </p>
@endsection

<script>
        alert('Se inserto un nuevo usuario');
</script>