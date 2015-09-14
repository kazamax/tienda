@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1 class="titulo">
				<i class="fa fa-user"></i>
				USUARIOS&nbsp; <a href="{{ route('admin.user.create')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Usuario</a>
			</h1>
		</div>
		<div class="page">
		<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead style="color:black; ">
						<tr class="warning">
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Id</th>
							<th>Nombre y apellido</th>
							<th>E-mail</th>
							<th>Usuario</th>
							<th>Tipo</th>
							<th>Dirección</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr> 
								<td>
								<a href="{{route('admin.user.edit', $user)}}" class="btn btn-success">
									<i class="fa fa-pencil-square"></i>
								</a>
								</td>
								<td>
									{!! Form::open(['route' => ['admin.user.destroy', $user]]) !!}
									<input type="hidden" name="_method" value="DELETE">
									<button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>
									</button>
									{!! Form::close() !!}
								</td>
								<td>{{ $user->id}}</td>
								<td>{{ $user->full_name}}</td>
								<td>{{ $user->email}}</td>
								<td>{{ $user->user}}</td>
								<td>{{ $user->type}}</td>
								<td>{{ $user->address}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			    <div class="text-center">
               		 <?php echo $users->render(); ?><br>
                	 <a href="{{ route('admin.home') }}" class="btn btn-primary">Ir al Panel principal</a>
          		 </div>
			</div>
		</div><br><br><br>
	</div>
@stop