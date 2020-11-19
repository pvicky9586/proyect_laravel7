@extends('layouts.app')
@section('title','- Bienvenidos')
@section('content')


<div>
  

		  <div style="display:flex;"> 
			  <img src="{{ Storage::url("images/logo.png") }}""  width="300" height="400"> 
		 

			  <div align="center" class="sal"><span class="sal-2">¡Hola amigos y amigas! </span>   
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Somos un equipo 100% comprometidos en brindarles la oportunidad que se ha planteado en pro de su crecimiento tanto personal como profesional</p>	
			 </div>
         </div> 
      	
		
	   	       
			
		<p class="nosot">
			&nbsp;&nbsp;&nbsp;&nbsp;Miramos al porvenir como el tránsito laborioso de confeccionar el pan. 
			Concientes que otra sociedad ha surgido.  Donde las fuerzas irruptivas van más allá del conocimiento formal. Mirando en cada entorno un valioso escenario formativo. Donde todos tenemos que desarrollar competencias y habilidades para insertarnos en ellos. Con la certeza de transformarlos para generar conexiones sensibles con el otro.
		</p> 
                     	
		           <div align="center"  style="font-size:1.5rem;">
						Nuestra direccion - E-mail: <b class="email">'astudillosgroup@gmail.com' </b> 
		           </div>
		           <br>
		     <h1>Somos un equipo de profesionales, conformados por: </h1>
				 

            	<div  style="font-size:1.5rem;">
					<details >
						<summary>Dr. Ysneride Atudillo</summary>
						<div > 
							E-mail: Ysmeride@gmail.com  <br><a href=""><small>mas informacion...</small></a>  
						</div>
					</details>  &nbsp;&nbsp;&nbsp;&nbsp;
				</div>
					
				<div>
					<details style="">
						<summary>Prof. Juan Javier Atudillo</summary>
						<div> 
							E-mail: JJavier@gmail.com  <br><a href=""><small>mas informacion...</small></a>  
						</div>
					</details>
			    </div>  

 
</div>
@endsection

