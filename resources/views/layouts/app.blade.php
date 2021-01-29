<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--meta para adaptadar web a Dispositivos Moviles-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ASTUDILLO'S GROUP @yield('title')</title>




	<link rel="stylesheet" href="{{asset('css/menu.css')}}">
	<link rel="stylesheet" href="{{asset('css/fonts.css')}}">
	











    <!-- Styles -->
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> 
   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
   @livewireStyles 

<script src="http://code.jquery.com/jquery-latest.js"></script>							
			<script src="{{asset('js/menu.js')}}"></script> 

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </head>
 
<body>
<div>
	<header class="header"> 
		<video   autoplay loop muted >
			<source src="{{ Storage::url("Header.mp4")}}" type="video/mp4">
		</video>
	</header> 
</div>

<div>














@if (Auth::user()) 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!-- <a href="{{ route('welcome') }}" navbar-brand >
	<img src="{{asset('images/icons/home.png')}}" width="80" height="60" class=" dropdown-item {{ request()->routeIs('welcome') ? 'd-lg-none' : ''}}"></a> -->
<!-- 					
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item TextMenu {{ request()->routeIs('resp-livew') ? 'active' : ''}}">
			<a href="{{ route('resp-livew')}}" class="nav-link">
				Responsables</a>
		</li>



      <li class="nav-item {{ request()->routeIs('cursos.index') ? 'active' : ''}}">
        <a href="{{ route('cursos.index') }}" class="nav-link"><span class="icon-rocket"></span>Cursos</a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{route('ideas')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ideas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"style="padding-left: 5%;" >Articulos</a><br>
          <a class="dropdown-item" href="#" style="padding-left: 5%;" >Libros</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="padding-left: 5%;" >Publicaciones</a>
          <a class="dropdown-item" href="#" style="padding-left: 5%;" >Relexiones</a>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link disabled" href="{{route('AV-livew')}}"><span class="icon-earth">AulaVirtual</a>
      </li>
    </ul>

@endif

     <div class="auth">
		     @if (Auth::user()) 			 
				 	<a href="{{ url('/logout') }}"  class="user-auth" data-toggle="dropdown" role="button" aria-expanded="false"> 
						<?php echo  (strtoupper (Auth::user()->username) )?>
				    </a>				
				@if ((Auth::user()->privileges) === 1)
					<div align="center" >
						<a href="{{ route('Admin') }}" class=""style="font-size:16px; ">
							<img src="{{ asset('images/icons/ajustes.png') }}" width="30" height="35" >  Usuario Administrar
						</a>
				    </div>
				@endif
				  <ul class="dropdown-menu" role="menu"><!--dejo abierto 'ul' -->				
					<li> 
						<a href="{{ route('logout') }}" class="salir" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Salir">Cerrar Seccion</a>
						<form id="logout-form" action="{{ route('logout') }} " method="POST">{{ csrf_field() }}  </form> 
					</li>									
				  @else 
					<a href="{{ route('login') }}"  style="color:#0000FF;"><img src="{{asset('images/icons/acceso.png')}}">Acceder</a>
				  @endif   		    	
	</div>
   <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

</div>

























<div style="margin-top:10%;">
	<div>
		@livewire('app-menu')
	</div>
	

<!--
	<div id="Menu" style="display:flex;"> 	
			<label class="TextMenu"><a href="{{ route('welcome') }}">Inicio</a></label>
			<label class="TextMenu"><a href="{{ route('nosotros') }}">Nosotros</a></label>			
			<label class="TextMenu"><a href="#">Cursos</a></label>  		
			<label class="TextMenu"><a href="" >Libros</a></label>			
			<label class="TextMenu"><a href="">AulaVirtual</a></label>
			<label class="TextMenu"><a href="">Contactos</a></label>
	</div> 
	
-->  

	
			
</div>

<div  class="cont-2">					
	<div  class="container-left" >
		 @yield('content')
				      
	</div>

	<div class="bar-right" > 
		<div>
			<a href="{{ route('AV-livew')}}"> 
				<img src="{{ asset('images/av2.jpeg')}}" class="img-left" title="entrar al Aula Virtual">
			</a> 
		    <br><br>
			<a href="">  
			<img src="{{ asset('images/Asociados.png')}}" class="img-left" title="Asociados">
			</a>	
		</div>    	
	</div> 
</div>
	
		
   




<footer>
	<div id="footer" align="center"> @ (2020) todos los derechos reservados
		<a href="" ><img src="{{asset('images/icons/Facebook.png')}}" width="80" height="60" style="float:right; margin-left:20px; opacity:0.5; "></a>
		<a href="" ><img src="{{asset('images/icons/Twitter.png')}}" width="80" height="60" style="float:right; margin-left:20px;opacity:0.5;"></a>
		<a href=""><img src="{{asset('images/icons/Messeger.png')}}" width="80" height="60" style="float:right; margin-left:20px; opacity:0.5;"></a>
	</div>
</footer>

			<!-- Scripts -->
			


    <script src="{{ asset('js/app.js') }}"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
 <!--    <script src="http://code.jquery.com/jquery-latest.js"></script> -->
	



</body>
</html>


    @yield('script')
