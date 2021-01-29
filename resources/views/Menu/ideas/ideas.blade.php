@extends('layouts.app')
@section('title','- Bienvenidos')
@section('content')


<div>
  

		  <div style="display:flex;" class="nosot"> 
			  
		 <div align="center">
		 	Aquí mostramos una muestra de nuestras ideas, dejando el
			mayor espacio para las tuyas:
		</div>
	
			

			 <img src="{{ Storage::url("images/logo.png") }}""  width="300" height="300"> 
         </div> 

         	<ul>
				<li><a href="">El Vuelo de la Mariposa en el Fluido Digital</a></li>
				<li><a href="">La Magia de Crear</a></li>
				<li><a href="">Publicación en revista científica</a></li>
				<li><a href="">Tesis de Maestrías, Especialización, Doctorado</a></li>
				<li><a href="">Conferencias</a></li>
				<li><a href="">Canal de TV-IP</a></li>
				<li><a href="">Trabajos y Estudios</a></li>
				<li><a href="">Los tres de Andrés Oppenheimer</a></li>
				<li><a href="">El vendedor del Tiempo</a></li>
				<li><a href="">Coaching para el Éxito</a></li>

		</ul>

</div>



@endsection

