 @extends('layouts.app')
@section('title','- Bienvenidos')
@section('content')


<div>
  

		  <div style="display:flex;"> 
			  <img src="{{ Storage::url("images/logo.png") }}""  width="300" height="200"> 
		 

			  <div align="center" class="hola">¡Hola amigos y amigas!    
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Somos un equipo 100% comprometidos en brindarles la oportunidad que se ha planteado en pro de su crecimiento tanto personal como profesional</p>	
			 </div>
         </div> 
      	
		
	   	       
			
		<p class=""  style=" font-size:1.5rem; font-style:oblique;">&nbsp;&nbsp;&nbsp;&nbsp;Miramos al porvenir como el tránsito laborioso de confeccionar el pan. 
			Concientes que otra sociedad ha surgido.  Donde las fuerzas irruptivas van más allá del conocimiento formal. Mirando en cada entorno un valioso escenario formativo. Donde todos tenemos que desarrollar competencias y habilidades para insertarnos en ellos. Con la certeza de transformarlos para generar conexiones sensibles con el otro. </p> 

		
		           <div align="center" style="font-size:36px; ">
						Nuestra direccion - E-mail: <b class="email">'astudillosgroup@gmail.com' </b> 
		           </div>
		     <h1>Somos un equipo de profesionales, conformados por: </h1>
				 

            	<div  style="font-size:1.5rem;">
					<details >
						<summary>Dr. Ysneride Atudillo</summary>
						<div style="padding:5%;"> 
							E-mail: Ysmeride@gmail.com  <br><a href=""><small>mas informacion...</small></a>  
						</div>
					</details>  &nbsp;&nbsp;&nbsp;&nbsp;
				</div>
					
				<div>
					<details style="">
						<summary>Prof. Juan Javier Atudillo</summary>
						<div style="padding:5%;"> 
							E-mail: JJavier@gmail.com  <br><a href=""><small>mas informacion...</small></a>  
						</div>
					</details>
			    </div>  

 
</div>
@endsection

<style scoped>

	#app{
   width: 100vh; height: 80vh;  

}

 #cont{ 
	display:flex;  
	 background-image: url("/images/editar.png") !important;
	 width: 100%; height: 100%;
	 background-repeat: no-repeat;
	 background-repeat: no-repeat !important;
    background-attachment: scroll !important;
    background-position: center center !important;
    background-opacity:0,5 !important;
    z-index: auto;
    background-size: cover !important;
    -webkit-background-size: cover !important;
    -moz-background-size: cover !important;
    -o-background-size: cover !important;
    opacity:0.5; 

	}
.email{ 
	color: blue;
	font-weight:bold; 
	font-style:italic;
	font-weight:500;}
h1{ 
	font-size: 24px; 
	margin-left:5%; 
	margin-top:2%;}
.div-dl{ 
	display:flex; 
	top:0; 
	margin:5%}
summary{ 
	font-size:24px; 
	font-weight:50%; 
	color:#2D18E0;}
.hola{ 
	font-size:2rem; 
	font-style: cursive; 
	font-weight:bold; 
	margin:5% ;
	text-align:center;}
small { 
	font-size:14px; 
	color:#2990B2; 
	font-weight:bold;}

</style>
