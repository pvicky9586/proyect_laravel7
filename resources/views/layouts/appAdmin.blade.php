<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ASTUDILLO'S GROUP @yield('title')</title>

    	<link rel="stylesheet" href="{{asset('css/menu.css')}}">
	<link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <!-- Styles -->
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> 
   <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
   @livewireStyles 
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      @livewireStyles
 </head>
 
<body>
<div>
<header class="header-2"> 
		<video   autoplay loop muted >
			<source src="{{ Storage::url("Header.mp4")}}" type="video/mp4">
		</video>
</header>  

	
<div style="margin-top:13%;" class="input-group">

	<div>
		@livewire('app-menu')
	</div>
		@if (Auth::user())
		<div class="auth"> 
		    <a href="{{ url('/logout') }}"  class="user-auth" data-toggle="dropdown" role="button" aria-expanded="false"> 
				<?php echo  (strtoupper (Auth::user()->username) )?>
			</a>				
			@if ((Auth::user()->privileges) === 1)
				<a href="{{ route('Admin') }}" class="">
					<img src="{{ asset('images/icons/ajustes.png') }}" width="30" height="35" >  Usuario Administrar
				</a>			    
			@endif
			 <ul class="dropdown-menu" role="menu"><!--dejo abierto 'ul' -->				
			<li> 
			  	<a href="{{ route('logout') }}" class="salir" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Salir">Cerrar Seccion
			   	</a>
			<form id="logout-form" action="{{ route('logout') }} " method="POST">{{ csrf_field() }}  
			</form> 
			</li>
		@else 
			<a href="{{ route('login') }}"  style="color:#0000FF;"><img src="{{asset('images/icons/acceso.png')}}">
				Acceder
			</a>			   		    	
		@endif
	</div>

</div>
	<div class="input-group {{ request()->routeIs('inscribirse/2') ? 'd-lg-none' : ''}}">
	 	<div class="form-outline">
	  		<form class="">
		    <input type="search" id="form1" class="form-control" placeholder="Search" />	    
		</div>
		   <button type="button" class="btn btn-primary" style="font-size: 0.8rem;">  
	  	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
		<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
		</svg>
	</button>
	  </form>  
	</div>


			
	

	<div  class="cont-2">					
		 <div  class="container-left" >
			 @yield('content')
			 @livewireScripts  		      
		 </div>
		    
	</div>
		
 </div>  


	
	
			<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

    <script src="{{asset('js/menu.js')}}"></script>

    @yield('script')
</body>
</html>


   
