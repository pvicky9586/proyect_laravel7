function SelecDinam(){
  var formulario = document.getElementById('formulario'); //formulario
  var elementos = formulario.elements; //todos los campos

  var mod = formulario.mod.value; //campos id="mod"
     if (mod == 1 || mod == 3){
		alert("Indique la Especialidad");
        esp.style.display='block';
        Post.style.display='none';
        //volverlos a estar vacio  -->formulario.Post.value = ''; 
        
      }
    if(mod == 2){
		esp.style.display='none';
        alert("Señale Studio de postgrado");
        Post.style.display='block';
        //volverlos a estar vacio  -->formulario.esp.value = "";
    }

}

