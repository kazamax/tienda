@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1 class="titulo">
				<i class="fa fa-dropbox"></i>
				PRODUCTOS&nbsp; <a href="{{ route('admin.product.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></i> Producto</a>
			</h1>
		</div>
		<div class="page">
		<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead style="color:black; ">
						<tr class="warning">
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Categoria</th>
							<th>Extracto</th>
							<th>Precio en $</th>
							<th>Precio en Bf.</th>
							<th>Visible</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
							<tr> 
								<td>
								<a href="{{ route('admin.product.edit', $product->slug) }}" class="btn btn-success">
									<i class="fa fa-pencil-square"></i>
								</a>
								</td>
								<td>
									{!! Form::open(['route' => ['admin.product.destroy', $product->slug]]) !!}
									<input type="hidden" name="_method" value="DELETE">
									<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>
									</button>
									{!! Form::close() !!}
								</td>
								<td><img src="{{ asset('img/productos-img/' . $product->image) }}" alt="Franelas, playeras camisas 100% originales | TiendaOnline" title="{{$product->name }}" width="40"></td>
								<td>{{ $product->name }}</td>
								<td>{{ $product->category->name }}</td>
								<td>{{ $product->extract }}</td>
								<td>{{ number_format($product->price, 2) }}</td>
								<td>{{ number_format($product->price_bf, 2) }}</td>
								<td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
							</tr>
						@endforeach
					</tbody>
				</table><hr>
				<div class="text-center">
               		 <?php echo $products->render(); ?><br>
                	 <a href="{{ route('admin.home') }}" class="btn btn-primary">Ir al Panel principal</a>
          		 </div>
				
			</div>
		</div><br><br><br>
	</div>
@stop