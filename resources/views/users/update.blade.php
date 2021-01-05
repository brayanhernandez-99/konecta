@extends('layout')

@section('title', "$title")

@section('content')

<div class="container">
    <h1>{{ $title }} </h1>
    <ul>
        <li>
            <p>
                Usuario<br>
                Nombre: {{$data['name']}}<br>
                Documento: {{$data['document']}}<br>
                Correo: {{$data['email']}}<br>
                Dirección: {{$data['address']}}<br>
            </p>
        </li>
    </ul>
    <p>
        <a href="{{ action('UserController@index') }}">Regresar...</a>
    </p>
</div>
<script>
    alert('Se actualizo usuario.');
</script>
@endsection