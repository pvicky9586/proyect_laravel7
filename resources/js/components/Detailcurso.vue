<template>
<div>

		<h1>Detalle del curso: {{ curso }}</h1>
		
		<button @click="home"> Ir a Home</button> 
</div>
</template>


<script>
export default {
	name: 'Detail',
	props:['curso'],
	data(){
		return{
			
		}
	},


	methods:{
		home(){
			this.$router.push('/')
		}
	}
}
</script>
	
