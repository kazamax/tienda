@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1  class="titulo">
				<i class="fa fa-file-text-o"></i>
				Categorias <i class="fa fa-plus-circle"></i>			</h1>
		</div>	

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@if(count($errors) > 0)
						@include('admin.partials.errors')
					@endif

					{!! Form::open(['route'=>'admin.category.store']) !!}
						
						<div class="form-group">
							<label for="name">Nombre:</label>
						
							{!! Form::text('name',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el nombre...',
							'autofocus'   => 'autofocus')) !!}
						</div>
	
						<div class="form-group">
							<label for="description">Descripción:</label>
							{!! Form::textarea('description',null,array(
							'class' => 'form-control' ))!!}
						</div>

						<div class="form-group">
							<label for="color">Color:</label>
							<input type="color" name="color" class="form-control">
						</div>

						<div class="form-group">
							{!! Form::submit('Guardar', array('class'=>'btn btn-success')) !!}
							<a href="{{ route('admin.category.index') }}" class="btn btn-danger">Cancelar</a>
						</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div><br><br>
	</div>
@stop