<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ASTUDILLO'S GROUP @yield('title')</title>
    <!-- Styles -->
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> 
   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </head>
 
<body>
 
<header> 
	<div>
		<video   autoplay loop muted >
			<source src="{{ Storage::url("Header.mp4")}}" type="video/mp4">
		</video>
	</div>  
</header> 	
	<br><br>	
	<div class="cont " style="display:flex;"> 						
		
		<div class="irHome" >
			<a href="{{ route('welcome') }}" title="Inicio" ><img src="{{ Storage::url("images/inicio.png")}}" width="100" height="120"></a>
		</div>	
	
	 <div class="auth" style="margin-left:70%;"> 
		     @if (Auth::user()) 			 
				 	<a href="{{ url('/logout') }}"  class="user-auth" data-toggle="dropdown" role="button" aria-expanded="false"> 
						<?php echo  (strtoupper (Auth::user()->username) )?>
				    </a>
				
				
				@if ((Auth::user()->privileges) === 1)
					<div align="center" >
						<a href="{{ route('AdmUser') }}" class=""style="font-size:16px; ">
							<img src="{{ asset('images/ajustes.png') }}" width="30" height="35" > Usuarios Administrador
						</a>
				    </div>
				@endif
				<ul class="dropdown-menu" role="menu"><!--dejo abierto 'ul' -->
				
				
				<li> 
					<a href="{{ route('logout') }}" class="salir" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Salir">Cerrar Seccion</a>
					<form id="logout-form" action="{{ route('logout') }} " method="POST">{{ csrf_field() }}  </form> 
				</li>
					
								
			  @else 
				<a href="{{ route('login') }}"  style="color:#0000FF;"><img src="{{asset('images/acceso.png')}}">Acceder</a>
			  @endif   		    	
			</div>
		</div> 

<div  class="cont-2 ">		
				
	 <div  class="container-app" >
		 @yield('content')
		      
	 </div>
	   
	
	 <div class="bar-left" > 
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
		<a href="" ><img src="{{asset('images/Facebook.png')}}" width="80" height="60" style="float:right; margin-left:20px; opacity:0.5; "></a>
		<a href="" ><img src="{{asset('images/Twitter.png')}}" width="80" height="60" style="float:right; margin-left:20px;opacity:0.5;"></a>
		<a href=""><img src="{{asset('images/Messeger.png')}}" width="80" height="60" style="float:right; margin-left:20px; opacity:0.5;"></a>
	</div>
</footer>
	
	
			<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    
</body>
</html>


    @yield('script')
