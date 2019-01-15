@extends('layout')
@section('content')
<div class="col-sm-8">
    <h2>
        Lista de Clientes
        <a href="{{ route('clients.create') }}" class="btn btn-primary pull-right">Nuevo</a>
	</h2>
    @include('clients.partials.info')
</div>
<hr>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Nombre del Cliente</th>
                <th>Cedula del Cliente</th>
                <th>Telefono del Cliente</th>
                <th>Email del Cliente</th>
                <th>Fecha de nacimiento del Cliente</th>
                <th>Estatus del Cliente</th>

            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>
                    <strong>{{ $client->name }}  {{ $client->apellido }}</strong>
                </td>
                <td>
                    {{ $client->cedula }}
                </td>
                <td>
                    {{ $client->telefono }}
                </td>
                <td>
                    {{ $client->email }}
                </td>
                <td>
                    {{ $client->fecha_nac }}
                </td>
                <td>
                    {{ $client->status }}
                </td>
                <td width="20px">
                    <a href="{{ route('clients.show', $client->id) }}" class="btn btn-link">
                        Ver
                    </a>
                </td>
                <td width="20px">
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-link">
                        Editar
                    </a>
                </td>
                <td width="20px">
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-link">borrar</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection