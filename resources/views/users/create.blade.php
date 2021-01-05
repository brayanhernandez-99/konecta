@extends('layout')

@section('title', "$title")

@section('content')
<h1>{{ $title }}</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <h6>Corregir los siguientes datos:</h6>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <form action="{{url('usuarios/crear')}}" method="post" name="register">
        {!!csrf_field()!!}
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre" class="form-control" aria-describedby="sizing-addon1">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-asterisk"></i></span>
            <input type="number" id="document" name="document" value="{{ old('document') }}" placeholder="Documento" class="form-control" aria-describedby="sizing-addon1">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Correo" class="form-control" aria-describedby="sizing-addon1">
        </div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
            <input type="address" id="address" name="address" value="{{ old('address') }}" placeholder="Direccion" class="form-control" aria-describedby="sizing-addon1">
        </div>
        <br>
        <button type="submit" class="btn btn-lg btn-primary btn-block btn-save">Crear usuario</button>
    </form>
    </br>
    <p>
        <a href="{{ action('UserController@index') }}">Regresar...</a>
    </p>
</div>
@endsection