@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1 class="titulo">
				<i class="fa fa-user"></i>
				Usuarios <i class="fa fa-plus-circle"></i>
			</h1>
		</div>	

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@if(count($errors) > 0)
						@include('admin.partials.errors')
					@endif

					{!! Form::open(['route'=>'admin.user.store']) !!}
						
						<div class="form-group">
							<label for="name">Nombre:</label>
						
							{!! Form::text('name',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el nombre..',
							'autofocus'   => 'autofocus')) !!}
						</div>
	
						<div class="form-group">
							<label for="last_name">Apellido:</label>
						
							{!! Form::text('last_name',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa tu apellido..',
							'autofocus'   => 'autofocus')) !!}
						</div>

						<div class="form-group">
							<label for="email">E-mail:</label>
						
							{!! Form::text('email',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el correo electronico..',
							'autofocus'   => 'autofocus')) !!}
						</div>

						<div class="form-group">
							<label for="user">Usuario:</label>
						
							{!! Form::text('user',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el usuario..',
							'autofocus'   => 'autofocus')) !!}
						</div>

						 <div class="form-group">
					        <label for="password">Clave</label>
					     	 {!! 
					     	 	Form::password('password',array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el tipo de usuario..',
							'required'   => 'required')) 
							!!}
						</div>


						 <div class="form-group">
					        <label for="confirm_password">Clave</label>
					     	 {!! 
					     	 	Form::password('password_confirmation',array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el tipo de usuario..',
							'required'   => 'required')) 
							!!}
						</div>

				

						<div class="form-group">
							<label for="type">Tipo de usuario:</label>
						
							{!! Form::radio('type','user',true) !!} User
							{!! Form::radio('type','admin') !!} Admin
						</div>

						<div class="form-group">
							<label for="address">Dirección:</label>
						
							{!! Form::textarea('address',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa tu dirección de envio',
							'autofocus'   => 'autofocus')) !!}
						</div>

						<div class="form-group">
							{!! Form::submit('Agregar', array('class'=>'btn btn-success')) !!}
							<a href="{{ route('admin.user.index') }}" class="btn btn-danger">Cancelar</a>
						</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div><br><br>
	</div>
@stop