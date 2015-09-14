@extends('store.template')
@section('title', 'Inicio de sesión de la tienda online.')

@section('content')<br>
	<div class="container text-center"><br><br>
		


	<div class="panel panel-info">
  <div class="panel-heading">
    <h3><i class="fa fa-sign-in"></i> Inicio de sesión</h3>
  </div>
  <div class="panel-body">
    <div class="row">
			<div class="col-md-offset-2 col-md-8">

					@include('store.partials.errors')<br>

					<form method="POST" action="login">	
					    {!! csrf_field() !!}

					    <div class="form-group">
					        <label for="email">Email</label>
					        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
					    </div>

					    <div class="form-group">
					        <label for="password">Password</label>
					        <input class="form-control" type="password" name="password" id="password">
					    </div>

					    <div class="form-group">
					        <input type="checkbox" name="remember"> Remember Me
					    </div>

					    <div class="form-group">
					        <button class="btn btn-success btn-block" type="submit">Iniciar sesión</button>
					    </div>
					    	<p>
						<a class="btn btn-primary" href="{{route('register-get')}}"> Registro <i class="fa fa-bars"></i>
						</a>
					</p>
					</form>
			</div>
		</div>
  </div>
</div>

		
	</div><br><br>
@stop