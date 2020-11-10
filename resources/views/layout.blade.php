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
<header> 
	<div>
		<video   autoplay loop muted >
			<source src="{{ asset('images/Header.mp4') }}" type="video/mp4">
		</video>
	</div>  
</header> 	
		


<div  class="cont">		
		<div class="IrHome" style="margin-top:2%;">
			<a href="{{ route('welcome') }}" title="Inicio" ><img src="{{ asset('images/inicio.png') }}" width="100" height="120"></a>
		</div>		
	 <div  class="container-app"  >
		  @yield('content')  
		  @livewireScripts   
	 </div>
 </div>
</body>
</html>

