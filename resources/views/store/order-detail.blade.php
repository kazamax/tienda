@extends('store.template')
@section('title', 'Por favor, revise bien su pedido de la tienda en linea.')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1 class="titulo"><i class="fa fa-shopping-cart"></i> Detalle del pedido</h1>
		</div>
		<div class="row">
		<div class="col-md-2"></div>
		<div class="page col-md-8 product-info panel" >
			<div class="table-responsive"><br><div style="margin-left:40px;"></div>
				<h3>Datos del usuario</h3><hr>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>Dirección de envio:</td><td>{{ Auth::user()->address }}</td></tr>
				</table>
			</div>
			<div class="table-responsive ">
				<h3>Datos del pedido</h3><hr>
				<table class="table table-striped table-hover table-bordered">
					<tr>
							<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imagen</th>
							<th>Producto</th>
							<th>Precio en $</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
						</tr>
					@foreach($cart as $item)
						<tr>
							<td><img src="{{ asset('img/productos-img/' . $item->image) }}"alt="Franelas, playeras camisas 100% originales | TiendaOnline" title="{{$item->name }}"></td>
							<td>{{ $item->name }}</td>
							<td>${{ number_format($item->price,2) }}</td>
							<td>{{ $item->quantity }}</td>
							<td>${{ number_format($item->price * $item->quantity,2) }}</td>
						</tr>
					@endforeach
				</table><hr>
				<h4>
					<span class="label label-success">
						Total: ${{ number_format($total, 2) }}
					</span>
				</h4><hr>
				<code>Importante : <br>- Los envios se realizan a traves de la empresa MRW.</code><br>
				<code>- Cualquier duda o pregunta consulte por nuestro chat en linea. <linea class=""></linea></code>
				<p><br>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left fa-2x	|					|       "></i> Regresar
					</a>

					<a href="{{ route('payment') }}" class="btn btn-warning">
						Pagar con <i class="fa fa-cc-paypal fa-2x"></i>
					</a>
				</p>
			</div>
			</div>
		</div>
				<div class="col-md-2"></div>

	</div>

@stop