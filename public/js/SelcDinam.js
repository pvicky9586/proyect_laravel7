function SelecDinam(){
	var formulario = document.getElementById('formulario'); //formulario
	var elementos = formulario.elements; //todos los campos
	var Resp = formulario.Resp.value; //campos "
	if(Resp == 1){
		alert("Selecione");
		uno.style.display='block';
		mas.style.display='none';
	}
	if(Resp == 2){
		alert("Marque los Responsables!");
		mas.style.display='block';
		uno.style.display='none';
	}
}


