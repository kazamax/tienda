@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1 class="titulo">
				<i class="fa fa-user"></i>
				Edición de usuarios  <i class="fa fa-pencil-square-o"></i>
			</h1>
		</div>	

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@if(count($errors) > 0)
						@include('admin.partials.errors')
					@endif

					{!! Form::model($user, array('route' => array('admin.user.update', $user))) !!}
						
						<input type="hidden" name="_method" value="PUT">

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
							
					<fieldset>
						 <div class="form-group">
					        <label for="password">Cambiar clave</label>
					     	 {!! 
					     	 	Form::password('password',array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el tipo de usuario..',
							)) 
							!!}
						</div>


						 <div class="form-group">
					        <label for="confirm_password">confirmar clave</label>
					     	 {!! 
					     	 	Form::password('password_confirmation',array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el tipo de usuario..',
							)) 
							!!}
						</div>
					</fieldset><hr>
				

						<div class="form-group">
							<label for="type">Tipo de usuario:</label>
						
							{!! Form::radio('type','user', $user->type=='user' ? true : false) !!} User
							{!! Form::radio('type','admin', $user->type=='admin' ? true :false) !!} Admin
						</div>

						<div class="form-group">
							<label for="address">Dirección:</label>
						
							{!! Form::textarea('address',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa tu dirección de envio',
							'autofocus'   => 'autofocus')) !!}
						</div>

						<div class="form-group">
							{!! Form::submit('Actualizar', array('class'=>'btn btn-success')) !!}
							<a href="{{ route('admin.user.index') }}" class="btn btn-primary">Cancelar</a>
						</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div><br><br>
	</div>
@stop