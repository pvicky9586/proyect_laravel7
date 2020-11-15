<template>
<div id="app">
      
		<button @click.prevent="ventana=true">Abrir</button>
		
		
		
	<div class="contenedor" v-bind="ventana" v-if="ventana">
	
		  
		<div class="modal">
		      <div class="header">
					<h1>Header</h1>  
			  </div>
				<div class="contenido">
					<form action="">   					
						<input type="data" name="" id="">                                             
						<input @clic.prevent="ventana=false" type="button" value="Guardar">            
					</form>   
				</div>  		
		</div> 
				  		
		
	</div>
</div>
</template>


 <script>
export default{
	name: 'Libros',
	data(){
		return{
		message: 'hola vue',
		ventana: false,
		}
	},
	methods: {
		
	},
 }
</script>

<style>
 .contenedor{
	position:fixed;
	top:0;
	left:0;
	width:100%;
	heidth: 100%;
	background: rqna(0,0,0,0.5);
 }
 .modal{
	background: red;
	boder-radius:10px;
	padding: 5px;
	width:600px;
	margin:50px auto;
}


 </style>


