@extends('layout')
@section('content')
<div class="col-sm-12">
    <h2>
    Editar cliente <a href="{{ route('clients.index') }}" class="btn btn-default pull-right">Listado</a>
	</h2>
    @include('clients.partials.error')
    {!! Form::model($clients, ['route' => ['clients.update', $clients->id], 'method' => 'PUT' ]) !!}
    
    @include('clients.partials.form')
   
    {!! Form::close() !!}

</div>
<hr>


@endsection