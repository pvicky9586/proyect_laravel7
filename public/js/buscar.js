function CombBusFil(){
	var formulario = document.getElementById('form-buscar'); //formulario
	var elementos = formulario.elements; //todos los campos
	
		if (formulario.BusFil[0].checked == true){		
			alert ("Selecciona Especialidad"); 
			formulario.BusFil[0].value = 1;	
            SelEsp.style.display='block'; 
            SelMod.style.display='none';  
            SelDon.style.display='none';  
            formulario.BusFil[1].value = ''; //hacer que no existe
            formulario.BusFil[2].value = '';
                                   
           } 
    
              
        if (formulario.BusFil[1].checked == true){	
			alert ("Selecciona Modalidad");
			formulario.BusFil[1].value = 2;	
			SelMod.style.display='block';					
			SelEsp.style.display='none';
			SelDon.style.display='none'; 
			formulario.BusFil[0].value = ''; //hscer que no existe
            formulario.BusFil[2].value = ''; 
           }   
      if (formulario.BusFil[2].checked == true){	
			alert ("Selecciona Localidad");
			formulario.BusFil[2].value = 3;	
			SelDon.style.display='block';					
			SelEsp.style.display='none';
			SelMod.style.display='none';
			formulario.BusFil[0].value = ''; //hscer que no existe
            formulario.BusFil[1].value = '';
           }   
        
}








/*ESTUDIANTES*/

function Buscar(){
  var formulario = document.getElementById('formulario'); //formulario
  var elementos = formulario.elements; //todos los campos

  //var ced = formulario.Busc[0].value;
  //var mod = formulario.Busc[1].value;
  //var esp = formulario.Busc[2].value;
  //var donde = formulario.Busc[3].value;
  
		if (formulario.Busc[0].checked == true){
			ced.style.display='block';
			but.style.display='block'; 
			esp.style.display='none';
			mod.style.display='none';
			donde.style.display='none'
			
								 
		  }
		if (formulario.Busc[1].checked == true){	
			  mod.style.display='block';
			  but.style.display='block'; 
			  ced.style.display='none';
			  esp.style.display='none';
			  donde.style.display='none';
		  }
		  
		  if (formulario.Busc[2].checked == true){
			  esp.style.display='block';
			  but.style.display='block'; 
			  ced.style.display='none';
			  mod.style.display='none';
			  donde.style.display='none';
		  }
		  if (formulario.Busc[3].checked == true){
			  donde.style.display='block';
			  but.style.display='block'; 
			  ced.style.display='none';
			  mod.style.display='none';
			  esp.style.display='none';
			
		  }
		  
		//e.preventDefault();
            

}












function BuscEgre(){
  var formulario = document.getElementById('form-buscar'); //formulario
  var elementos = formulario.elements; //todos los campos
  var Buscar = formulario.Busc.value;
  
   if (Buscar == 1){
	   formulario.cedula.value = '';
	  	   
	  formulario.BusFil[0].disabled = false;
	  formulario.BusFil[1].disabled = false;
	  formulario.BusFil[2].disabled = false;
	   
	  cedula.disabled = true;  
	}
	
	if (Buscar == 2){   
		 cedula.disabled = false;
		 formulario.cedula.focus(); 
		 alert("Indique la Cedula");    
	  formulario.BusFil[0].disabled = true;
	  formulario.BusFil[1].disabled = true;
	  formulario.BusFil[2].disabled = true;
	  
			SelDon.style.display='none';					
			SelEsp.style.display='none';
			SelMod.style.display='none';
	 
	 
		
	
	}


}



function BuscActo(){
  var formulario = document.getElementById('form-buscar'); //formulario
  var elementos = formulario.elements; //todos los campos
  var Buscar = formulario.Busc.value;
  
   if (Buscar == 1){   
	     alert("Selecione Acto");	      
	   	 prom.disabled = false; 
	  	 prom.style.display='block';   
	  	 mes.disabled = true;	
	  	 year.disabled = true;
	}
	
	if (Buscar == 2){  		  
		 alert("Seleccione Mes | Año"); 
		 mes.disabled = false;	 
	  	 year.disabled = false;
		 prom.disabled = true;
	}
	
	



}


	   //formulario.fecha.value = '';	

