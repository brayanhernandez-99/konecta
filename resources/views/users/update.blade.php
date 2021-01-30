@extends('layout')

@section('title', "Usuario actualizado")

@section('content')
<h1 class="pb-1">{{ $title }}</h1>
<div class="form-control">
    <div class="container">
        <p>
            <br>
            Nombre: {{ $data['name'] }}<br>
            Documento: {{ $data['document'] }}<br>
            Correo: {{ $data['email'] }}<br>
            Dirección: {{ $data['address'] }}<br>
            <br>
            <a href="{{ action('UserController@home') }}"><span class="oi oi-action-undo"></span> Regresar...</a>
        </p>
    </div>
</div>
<script>
    alert('Se actualizo usuario.');
</script>
@endsection