@extends('admin.template')
@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1  class="titulo">
				<i class="fa fa-file-text-o"></i>
				CATEGORIAS&nbsp; <a href="{{route('admin.category.create')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Categoria</a>
			</h1>
		</div>
		<div class="page">
		<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead style="color:black; ">
						<tr class="warning">
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Color</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
							<tr> 
								<td>
								<a href="{{route('admin.category.edit', $category)}}" class="btn btn-success">
									<i class="fa fa-pencil-square"></i>
								</a>
								</td>
								<td>
									{!! Form::open(['route' => ['admin.category.destroy', $category]]) !!}
									<input type="hidden" name="_method" value="DELETE">
									<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>
									</button>
									{!! Form::close() !!}
								</td>
								<td>{{ $category->name}}</td>
								<td>{{ $category->description }}</td>
								<td>{{ $category->color}}</td>
							</tr>
						@endforeach
					</tbody>
				</table><hr>
			</div>				
			<div class="text-center">
               		 <?php echo $categories->render(); ?><br>
                	 <a href="{{ route('admin.home') }}" class="btn btn-primary">Ir al Panel principal</a>
            </div>

		</div><br><br>
	</div>
@stop