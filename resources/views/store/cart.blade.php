@extends('store.template')
@section('title', 'Carrito de compras de la tienda en linea')

@section('content')
	<div class="container text-center">
		<div class="page-header">
		  <h1 class="titulo"><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
		</div>

		<div class="row">
		<div class="col-md-1"></div>
		<div class="table-cart col-md-10">
			@if(count($cart))

			<p>
				<a href="{{ route('cart-trash') }}" onclick="return confirm('Seguro de vaciar el carrito?')"  class="btn btn-danger">
					Vaciar carrito <i class="fa fa-trash"></i>
				</a>
			</p>
			
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead style="color:black; ">
						<tr>
							<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Imagen</th>
							<th>Producto</th>
							<th>Precio en $</th>
							<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio en BF</th>
							<th>&nbsp;&nbsp;&nbsp;Cantidad</th>
							<th>Subtotal</th>
							<th>Quitar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $item)
							<tr> 
								<td><img src="{{ asset('img/productos-img/' . $item->image) }}" alt="Franelas,playeras,camisas 100% originales | TiendaOnline" title="{{$item->name }}"></td>
								<td>{{ $item->name }}</td>
								<td>${{ number_format($item->price,2) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O</td>
								<td>BF. {{ number_format($item->price_bf,2) }}</td>
								<td>
									<input 
										type="number"
										min="1"
										max="100"
										value="{{ $item->quantity }}"
										id="product_{{ $item->id }}"
									>
									<a 
										href="#" 
										class="btn btn-warning btn-update-item"
										data-href="{{ route('cart-update', $item->slug) }}"
										data-id = "{{ $item->id }}"
									>
										<i class="fa fa-refresh"></i>
									</a>
								</td>
								<td>${{ number_format($item->price * $item->quantity,2) }}</td>
								<td>
									<a href="{{ route('cart-delete', $item->slug) }}" onclick="return confirm('Seguro de eliminar?')"  class="btn btn-danger">
										<i class="fa fa-remove"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table><hr>
				
				<h4>
					<span class="label label-success">
						Total = ${{ number_format($total,2) }}
					</span>
				</h4><br>	
				<code>Importante : <br>- Los envios se realizan a traves de la empresa MRW.</code><br>
				<code>- Cualquier duda o pregunta consulte por nuestro chat en linea. <linea class=""></linea></code>
				
			</div>
			@else
				<h3><span class="label label-warning">No hay productos en el carrito :(</span></h3><br>
			@endif
			<hr>
			<p><br>
			<div>
			
				<a href="{{ route('order-detail') }}" class="btn btn-primary btn-sm">
				 Pagar con Paypal <i class="fa fa-usd"></i>
				</a>

				@include('store.partials.modal')
				@include('store.partials.modal-gift')
				</div><br>
					<a href="{{ route('home') }}" class="btn btn-default btn-xs">
					<i class="fa fa-chevron-circle-left"></i> Seguir comprando
				</a>

			</div>

			</p>
		</div><br><br><br><br>
		</div>
		<div class="col-md-1"></div>

	</div>
@stop