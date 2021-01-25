var checkbox = document.getElementById('conf');
	var text = document.getElementById('text');
	checkbox.addEventListener( 'change', function() {
    if(this.checked) {
       //alert('checkbox esta seleccionado');
       text.style.color = "green";
    }else{
    	 text.style.color = "black";
    }
});