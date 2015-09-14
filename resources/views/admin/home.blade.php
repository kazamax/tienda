@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1  class="titulo"><i class="fa fa-rocket"></i> Mi Tienda Online- DASHBOARD</h1>
		</div>

		<h1 class="titulo">
		Bienvenido(a) {{ Auth::user()->user }} al panel de tu tienda Online
	 	</h1><hr>

		<div class="row">

	 		<div class="col-md-6">
	 			<div class="panel">
	 				<i class="fa fa-list-alt icon-home"></i>
	 				<a href="{{ route('admin.category.index')}}" class="btn btn-primary btn-block btn-home-admin">CATEGORIAS</a>
	 			</div>
	 		</div>

	 		 <div class="col-md-6">
	 			<div class="panel">
	 				<i class="fa fa-shopping-cart icon-home"></i>
	 				<a href="{{ route('admin.product.index')}}" class="btn btn-primary btn-block btn-home-admin">PRODUCTOS</a>
	 			</div>
	 		</div>

		 </div>

		 <div class="row">

		 	<div class="col-md-6">
	 			<div class="panel">
	 				<i class="fa fa-cc-paypal icon-home"></i>
	 				<a href="{{ route('admin.order.index')}}" class="btn btn-primary  btn-block btn-home-admin">PEDIDOS</a>
	 			</div>
	 		</div>

	 		 <div class="col-md-6">
	 			<div class="panel">
	 				<i class="fa fa-users icon-home"></i>
	 				<a href="{{ route('admin.user.index')}}" class="btn btn-primary  btn-block btn-home-admin">USUARIOS</a>
	 			</div>
	 		</div>

		 </div><br><br>
	 </div>
@stop