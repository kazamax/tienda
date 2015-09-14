@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1 class="titulo">
				<i class="fa fa-dropbox"></i>
				Editar <i class="fa fa-pencil-square"></i>
			</h1>
		</div>	

		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@if(count($errors) > 0)
						@include('admin.partials.errors')
					@endif

				{!! Form::model($product, array('route' => array('admin.product.update', $product->slug))) !!}

						<input type="hidden" name="_method" value="PUT">

						<div class="form-group">
							<label class="control-label" for="category_id">Categoria:</label>
						
							{!! Form::select('category_id',$categories,null,['class' => 'form-control']) !!}
						</div>					

						<div class="form-group">
							<label for="name">Nombre:</label>
						
							{!! Form::text('name',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el nombre..',
							'autofocus'   => 'autofocus')) !!}
						</div>
						
						<div class="form-group">
							<label for="extract">Extracto:</label>
						
							{!! Form::text('extract',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el extracto..')) !!}
						</div>
	
						<div class="form-group">
							<label for="description">Descripción:</label>
						
							{!! Form::text('description',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa la descripción..')) !!}
						</div>

						<div class="form-group">
							<label for="price">Precio en Bolivares:</label>
						
							{!! Form::number('price',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el precio en Dolares..',
							'autofocus'   => 'autofocus')) !!}
						</div>
						
						<div class="form-group">
							<label for="price_bf">Precio en Dolares:</label>
						
							{!! Form::number('price_bf',null,array(
							'class' 	  => 'form-control',
							'placeholder' => 'Ingresa el precio en Dolares..',
							'autofocus'   => 'autofocus')) !!}
						</div>
						
						<div class="form-group">
							<label for="visible">Visible:</label>
							<input type="checkbox" name="visible" {{ $product->visible == 1 ? "checked='checked'" : '' }}>
						</div>

						<div class="form-group">
							{!! Form::submit('Actualizar', array('class'=>'btn btn-success')) !!}
							<a href="{{ route('admin.product.index') }}" class="btn btn-danger">Cancelar</a>
						</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div><br><br>
	</div>
@stop