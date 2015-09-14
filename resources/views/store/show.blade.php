@extends('store.template')
@section('title', "$product->name | Bs.$product->price_bf en Tienda online")

@section('content')
<div class="container text-center">
	<div class="page-header">
	  <h1 class="titulo"><i class="fa fa-shopping-cart"></i> Detalle del producto {{ $product->name }}</h1>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
					<img style="height:400px;width:400px;"src="{{ asset('img/productos-img/' . $product->image) }}" alt="Franelas,playeras,camisas 100% originales | TiendaOnline" title="{{$product->name }}"class="img-thumbnail img-responsive">
			</div>
			<div class="product-block">
			<div class="fb-comments" data-href="http://tienda.com/product/{{$product->slug}}" data-width="100%" data-numposts="5"></div>	
			</div>
		</div>

		<div class="col-md-6">
			<div class="product-block">
				<h2 class="titulo">{{ $product->name }}</h2><hr>
				<div class="product-info panel">
					<p style="text-align:left;padding:8px;color:black">{{ $product->description }}</p><br>
					<h4>
						<span class="label label-warning">Precio en USD = ${{ number_format($product->price,2) }}</span>
					</h4>
					<h4>
						<span class="label label-success">Precio en BF = {{ number_format($product->price_bf,2) }}</span>
					</h4>
					<p><br>
						<a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug) }}">
							La quiero <i class="fa fa-cart-plus fa-2x"></i>
						</a>
					</p>
				</div>
			</div>	
		</div>
	</div><hr>

	<p>
		<a class="btn btn-primary" href="{{ route('home') }}">
			<i class="fa fa-chevron-circle-left"></i> Regresar
		</a>
	</p>
</div>
@include('store.partials.chat')
@stop 