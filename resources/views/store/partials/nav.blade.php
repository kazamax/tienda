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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('cart-show') }}"><i style="color:black;" class="fa fa-cart-plus"></i></a></li>
        <li><a style="color:black"href="{{ route('forum') }}">Referencias</a></li>
        <li><a style="color:black"href="#">Conocenos</a></li>
        @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>