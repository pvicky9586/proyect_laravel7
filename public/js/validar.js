function validar(){
	var formulario = document.getElementById("form-buscar"), 
                    elementos = formulario.elements, 
                    boton = document.getElementById('BuscActo');
                    
                var validarRadio = function(e){
						
                    if(formulario.Busc[0].checked == true || formulario.Busc[1].checked == true){
                     }else{
                        alert("Indique busqueda");
                        e.preventDefault();
                       }   
				}
	}
