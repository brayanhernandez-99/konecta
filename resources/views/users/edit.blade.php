@extends('layout')

@section('title', "Editar usuario")

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
<div class="form-control">
    <div class="container">
        <form action="{{ url('usuarios/actualizar', ['id'=> $user->id]) }}" method="post" name="update">
            {!!csrf_field()!!}
            <br>
            <div class="input-group">
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" placeholder="Nombre" class="form-control">
            </div>
            <div class="input-group">
                <input type="number" id="document" name="document" value="{{ old('document', $user->document) }}" placeholder="Documento" class="form-control">
            </div>
            <div class="input-group">
                <input type="email" id="email" name="email" readonly value="{{ old('email', $user->email) }}" placeholder="Correo" class="form-control">
            </div>
            <div class="input-group">
                <input type="address" id="address" name="address" value="{{ old('address', $user->address) }}" placeholder="Direccion" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block btn-save">Guardar cambios</button>
        </form>
        <p>
            </br>
            <a href="{{ action('UserController@home') }}"><span class="oi oi-action-undo"></span> Regresar...</a>
        </p>
    </div>
</div>
@endsection