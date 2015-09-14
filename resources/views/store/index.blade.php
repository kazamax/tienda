@extends('store.template')
@section('title', 'Franelas Quik silver Rip curl Hurley | Originales | en TiendaOnline')

@section('content')

@include('store.partials.slider')

<div class="container text-center">
<h1 class="titulo">Franelas MARCAS : Quik Silver , Rip Curl , Hurley , Under Armor 100% Originales!</h1>
	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel"> <img src="{{ asset('img/b-venezuela.jpg') }}" alt="Imagen de bandera Venezolana" title="Bandera de Venezuela | tiendaOnline" class="avatar-index">
				<h2 class="titulo">
					{{ $product->name }}
				</h2><div class="ex2">
				 
				<div class="color" 
				style="background-color:{{$product->category->color}}">
				 </div>

				<a href="{{ route('product-detail', $product->slug) }}"><img src="{{ asset('img/productos-img/' . $product->image) }}" alt="Franelas, playeras camisas 100% original | TiendaOnline" title="{{ $product->name }}" class="img-thumbnail"></a></div>
				<div class="product-info panel"><br>	
					<p>{{ $product->extract }}</p>
					<h4>
						<span class="label label-warning">Precio USD = ${{ number_format($product->price,2) }}</span>
					</h4>
					<h4>
						<span class="label label-success">Precio BF = {{ number_format($product->price_bf,2) }}</span>
					</h4>
				
					<p>
						<a class="btn btn-warning" href="{{ route('cart-add', $product->slug) }}">
							<i class="fa fa-cart-plus"></i> La quiero...
						</a>
					</p>
					<p>
						<a class="btn btn-primary" href="{{ route('product-detail', $product->slug) }}"><i class="fa fa-search"></i> Visualizar
						</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
		<div class="text-center">{!! $products->render() !!}</div>
</div>
@stop