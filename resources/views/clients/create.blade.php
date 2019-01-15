@extends('layout')
@section('content')
<div class="col-sm-12">
    <h2>
        Crear cliente <a href="{{ route('clients.index') }}" class="btn btn-default pull-right">Listado</a>
	</h2>
        @include('clients.partials.error')

        {!! Form::open( ['route' => 'clients.store']) !!}
    
                @include('clients.partials.form')
        
        {!! Form::close() !!}


</div>
<hr>


@endsection