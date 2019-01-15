@extends('layout')
@section('content')
<div class="col-sm-12">
    <h2>
        {{ $clients->name }}  {{ $clients->apellido }}     <a href="{{ route('clients.edit', $clients->id) }}" class="btn btn-default pull-right">Editar</a>
	</h2>
    <h3>{{ $clients->cedula }}</h3>
    <h3>{{ $clients->telefono }}</h3>
    <h3>{{ $clients->email }}</h3>
    <h3>{{ $clients->fecha_nac }}</h3>
    <h3>{{ $clients->status }}</h3>

</div>
<hr>


@endsection