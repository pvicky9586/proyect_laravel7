function Public(){
	var formulario = document.getElementById('formulario'); //formulario
	var elementos = formulario.elements; //todos los campos
	var statud = formulario.public.value; //campos id="mod"
	if(statud == 1){
		   alert("Pulicar Curso");
		   msjNo.style.display='none';
		  // msj.style.display='block';
		
	}
	if(statud == 0){
		       alert("No Pulicar Curso");
		     // msj.style.display='none';
		      msjNo.style.display='block';
	}
}
