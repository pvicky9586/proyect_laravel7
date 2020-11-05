<template>
<div>
  
    <div style="display: flex; margin-right:5%;">
		<div>
			<img src="images/logo.png" width="500" />
         </div>
         <div>
			 <div align="center" class="tite">
				<strong  align="center">Convencidos que los mejores tiempos </strong><br>
				<small class="tite2" align="center">¡son estos que vivimos! </small>  
			</div>
			<div  >
	          <p style="font-size:40px; padding:10%;">&nbsp;&nbsp;&nbsp;&nbsp;Concebimos este espacio como encuentro para el fortalecimiento de las ideas. Donde cada individuo trabaje desde sus rocas, como matriz de sus sueños.	</p>
	        </div>   			     
		</div> 
		
	   </div>		       
	<p class="p-2">&nbsp;&nbsp;&nbsp;&nbsp;En la medida vayamos compartiendo contigo, con él, con ella, con Uds, sin limitaciones de ninguna índole, alcanzaremos estadios superiores de conciencia. Capaces de innovar e inventar al mirar tus voluntades y las nuestras, entrelazadas. Conectadas para generar energías de acercamiento. Nuestra roca es la familia, albergado en un hogar más allá del ámbito físico y mental.  </p>
 
    
	

	<div class="H-Ast">
		<b>Astudillo's Group</b> es la fragancia del espacio posible de ser niño aún cuando nos cubra el ropaje de adulto.		
	</div>

		<span"> 
			<img src="https://viapacksur.files.wordpress.com/2013/07/100900-get-ideas-for-web-design-21.jpg"  align="right">
		</span> 
 
</div>
</template>
<script>
export default {
    data() {
    return {
        mensaje: 'Mensaje dinamico',
       }

    },
    methods: {
        mostarMensaje: function () {
            return this.mensaje;
        },
        ocultar(){
               document.getElementById('det').style.display = 'none';
        }
    }
    
   

   
    
    
}


</script>

<style >
	
#inicio{
	margin-top:20px;
	margin-right:5%;
	}
.tite{ font-size: 36px; 
	color: #00558d; 
	text-align:center; 
	font-family: fantasy;
	margin-top:5%;}
.tite2{
	color:#FF7A00; 
	font-size: 36px; 
	font-family: fantasy;}	
.H-Ast{font-size:40px; text-align:center; margin-left:10%; margin-right:10%; margin-top:5%;}
p { 
	text-align: justify;
	font-size:24px;
	line-height:1.5;
	padding-left:2%;
	padding-right:2%
	
}

.p-2{
	font-size:30px;
	 padding-left:10%; 
	 padding-right:10%; 
	 padding-top:0; 
	 top:0; 
	 font-style:oblique; }


</style>
