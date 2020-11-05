<!DOCTYPE html>
<html lang="es-ES" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ASTUDILLO'S GROUP @yield('title')</title>
    @livewireStyles
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> 
   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
   </head>
<body>
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<header>
		<h1 align="center" style=" color:#FFFFFF;">Astudillo's Group</h1>
			<!--si url es distinta a / mostrar esta imagen de inicion -- y mostrar texto cuando halla evento mouse sobre ella 
			<a href="{{ route('welcome') }}"><img src="{{ asset('images/inicio.png') }}" style="float:left;"></a>-->		
				
			<div class="link-auth">
			@if (Auth::user())
				<a href="{{ route('welcome')}}" style="color: #E9C80C;" data-toggle="dropdown" role="button" aria-expanded="false">
				<?php echo  (strtoupper (Auth::user()->username) )?></a>
				
					@if ((Auth::user()->privileges) === 1)
						<a href="{{ route('AdmUser') }}" class="link-priv">
					  <img src="{{ asset('images/ajustes.png') }}" width="30" height="35">  Adm > Usuarios | Cursos</a>
				   @endif	
				   
				<ul class="dropdown-menu" role="menu"><!--dejo abierto 'ul' -->
				<li>
					<a href="{{ route('logout') }}" class="salir" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Seccion</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST">{{ csrf_field() }}  </form>
				</li>				
		  @else 
			<a href="{{ route('login') }}"  style="color:#FFA500;"><img src="images/acceso.png">Acceder</a>
			<!-- <a href="{{ route('register') }}" class="link-ac2">Registrarse</a> solo usarios registrado como arministrador tiene permiso para registrar usuarios-->	
		  @endif
		 </div>	
</header>	
		
	<section style="display:flex;">
										
 <div class="container-livew">
	@yield('content')
</div>  

 <div class="bar-left" id="MLat">
		<a href="{{ route('AV-livew')}}">
		<img src="{{ asset('images/aula-virtual.png')}}"  class="img-left">
		Aula Virtual</a>
		<br><br>
		<a href="">
		<img src="{{ asset('images/Asociados.png')}}" class="img-left"></a>
    </div>	
</section>	


<footer>
	<div id="footer" align="center"> @ (2020) todos los derechos reservados
		<a href="" ><img src="{{asset('images/Facebook.png')}}" width="80" height="60" style="float:right; margin-left:20px; opacity:0.5; "></a>
		<a href="" ><img src="{{asset('images/Twitter.png')}}" width="80" height="60" style="float:right; margin-left:20px;opacity:0.5;"></a>
		<a href=""><img src="{{asset('images/Messeger.png')}}" width="80" height="60" style="float:right; margin-left:20px; opacity:0.5;"></a>
	</div>
</footer>
	

@lirewireScripts
   
    
</body>
</html>

