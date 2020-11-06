<template>
<div>
        
  
             <div> <img src="images/logo.png"  width="300">  </div>

	<div v-for="(curso, index) in cursos" :key="curso.id"> 
		
	       <div class="listCurs" style="height:300px; border-top: 1px solid;">     			
			<h1 style="color:#2D2D84; font-size:36px; " align="center">{{ curso.title }}</h1>													 
			<img :src="`storage/${curso.img}`"  class="img-cursoVue" align="right" alt="NO ah asignado imagen o no se encontro"/> 
					
			<div style="margin-left:5%; margin-right:15%;">
				<details>
					   <summary>Ver mas sobre el curso</summary>
							<div>
								<p>{{ curso.description }}</p>
								Duracion: {{ curso.duration }}
							</div> 					
				  </details>
			</div>			
		</div>
		<br><br>	
												
	</div>

</div>
</template>


<script>
export default {
	name:'Curso',
	data(){
		return {
			cursos:[]
		}
	},
	 mounted() {
			axios.get('/cursos').then((response) => {
				this.cursos = response.data; 
				 
			});
    }

}
</script>






<style scoped>

div details{
	heidht:auto;
}

details{ 
	font-size:24px;  }
summary{ 
	font-size:24px; 
	font-weight:50%; 
	color:#2D18E0;}
</style>
