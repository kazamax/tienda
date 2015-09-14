<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{ route('home') }}">Tienda-Online</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"><i class="fa fa-dashboard"></i>Dashboard</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('admin.category.index')}}">Categorias</a></li>
        <li><a href="{{route('admin.product.index')}}">Productos</a></li>
        <li><a href="{{route('admin.user.index')}}">Usuarios</a></li>
       <li><a href="{{route('admin.order.index')}}">Pedidos</a></li>
  	<li class="dropdown">
			<a style="background:#AFEEEE;color:black;border-radius:4px;border: 1px solid #000000;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="fa fa-user"></i> {{ Auth::user()->type}} {{ Auth::user()->user }} <i class="fa fa-chevron-down"></i>
    </a>
		<ul class="dropdown-menu" role="menu">
			<li><a style="color:black;text-align:center;margin:13px;padding:0px;height:10px;margin-top:4px;"href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Finalizar sesión </a></li>
		</ul>
	</li>
      </ul>
    </div>
  </div>
</nav>