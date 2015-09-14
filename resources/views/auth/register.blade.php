@extends('store.template')
@section('title', 'Registro para llevar a cabo la compra satisfactoriamente de la tienda en linea.')

@section('content')
	<div class="container text-center"><br><br><br>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3> <i class="fa fa-user"></i> Registro</h3>
  </div>
  <div class="panel-body">
    <div class="row">
			<div class="col-md-offset-2 col-md-8">

				@include('store.partials.errors')

					<form method="POST" action="registro">
					    {!! csrf_field() !!}
					    <code>(Importante): Estos datos seran los unicos que quedaran almacenados	<br> en nuestra base de datos para (poder realizar el envio del producto).</code><HR>
						
					   	<div class="form-group">
					        <label for="name">Nombre</label>
					        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
					    </div>

					    <div class="form-group">
					        <label for="last_name">Apellido</label>
					        <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
					    </div>

					    <div class="form-group">
					        <label for="email">Correo</label>
					        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
					    </div>

					    <div class="form-group">
					        <label for="user">Nick o sobrenombre</label>
					        <input class="form-control" type="text" name="user" value="{{ old('user') }}">
					    </div>

					    <div class="form-group">
					        <label for="password">Clave</label>
					        <input class="form-control" type="password" name="password">
					    </div>

					    <div class="form-group">
					        <label for="password_confirmation">Confirmar clave</label>
					        <input class="form-control" type="password" name="password_confirmation">
					    </div>

					    <div class="form-group">
					        <label for="address">Dirección exacta <code>(Importante)</code></label>
					        <textarea class="form-control" name="address">{{ old('address') }}</textarea>
					    </div>

					    <div class="form-group">
					        <button class="btn btn-primary" type="submit">Crear cuenta <i class="fa fa-user"></i>
						</button>
					    </div>
					</form>

			</div>
		</div>
  </div>
</div><br>


		
	</div>
@stop
