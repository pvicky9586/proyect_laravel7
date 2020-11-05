<template>
  <div id="app">
	<div style="display:flex;">
						<!--<router-link to="/">
							<img src="images/inicio.png"  width="60" height="80" >
						</router-link>   -->
						
						
	 <div id="Menu">
			
					
				
			
				
				
				
				
				
				
			
				
		
		<label class="TextMenu"><router-link to="/nosotros">Nosotros</router-link></label>		
		
		<label class="TextMenu"><router-link to="/cursos">Cursos</router-link></label>
		
		<label class="TextMenu"><router-link to="/libros" >Libros</router-link></label>	
		
		<label class="TextMenu"><router-link to="/aulavirtual">Aula Virtual</router-link></label>
		<label class="TextMenu"><router-link to="/Contactos">Contactos</router-link></label>
				
	</div>
		</div>
		
		
<router-view/>
	
  </div>
</template>



<script>

</script>





<style>
#app{
	margin-top:1%;
	height:100%;
	width:100%;
}

#Menu{
	margin-left:10%; 
	}

.TextMenu{
	text-align:center;
	 padding:5px;
	 text-transform:uppercase;
	 font-size:20px;	
	text-decoration: none;
	border-right: 2px solid #000;
	/*font-weight: bold; */ }

a{	
  font-family: fantasy;
 text-decoration: none;
 color:#000000;
 font-size:22px; }
a:hover{ 		
	text-decoration: none;
	color:#1E90FF;
	}
a.router-link-exact-active {
	color:#1E90FF;
}  
</style>







