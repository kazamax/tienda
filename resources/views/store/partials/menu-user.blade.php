@if(Auth::check() and Auth::user()->type == "admin")
	<li class="dropdown">
		<a style="background:#AFEEEE;color:black;border-radius:4px;border: 1px solid #000000;padding:14px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> {{ Auth::user()->type}} {{ Auth::user()->user }} <i class="fa fa-chevron-down"></i>
		</a>
		
		<ul class="dropdown-menu" role="menu">
			<li><a style="color:black;text-align:center;margin:15px;padding:0px;height:10px;margin-top:4px;"href="{{ route('admin.home') }}"><i class="fa fa-tachometer"></i> Panel de Admin</a></li>
			<li><a style="color:black;text-align:center;margin:15px;padding:0px;height:10px;margin-top:4px;"href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Finalizar sesión </a></li>
		</ul>
	</li>
@elseif(Auth::check())
	<li class="dropdown">
		<a style="background:#AFEEEE;color:black;border-radius:4px;border: 1px solid #000000;padding:14px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> {{ Auth::user()->type}} {{ Auth::user()->user }} <i class="fa fa-chevron-down"></i>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a style="color:black;text-align:center;margin:13px;padding:0px;height:10px;margin-top:4px;"href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Finalizar sesión </a></li>
		</ul>
	</li>
@else
	<li class="dropdown">
		<a style="background:#AFEEEE;color:black;border-radius:4px;border: 1px solid #000000;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user"></i> <i class="fa fa-chevron-down"></i>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a style="color:black;text-align:center;margin:13px;padding:0px;height:10px;margin-top:4px;"href="{{ route('login-get') }}"><i class="fa fa-sign-in"></i> Iniciar sesión </a></li><hr>
			<li><a style="color:black;text-align:center;margin:13px;padding:0px;height:10px;margin-top:-10px;"href="{{ route('register-get') }}"><i class="fa fa-plus-square"></i>
 Registrarse</a></li>
		</ul>
	</li>
@endif