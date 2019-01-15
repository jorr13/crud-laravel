<div class="form-group">
	{!! Form::label('name', 'Nombre del cliente') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('apellido', 'Apellido del cliente') !!}
	{!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('cedula', 'cedula del cliente') !!}
	{!! Form::number('cedula', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('telefono', 'Telefono del cliente') !!}
	{!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email del cliente') !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fecha_nac', 'Fecha de nacimiento del cliente') !!}
	{!! Form::text('fecha_nac', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('status', 'Estatus del cliente') !!}
	{!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>