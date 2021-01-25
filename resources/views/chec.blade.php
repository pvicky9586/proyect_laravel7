<!DOCTYPE html>
<html>
<head>
	<title>check</title>
</head>
<body>



	<label for="test" id="text">
	  <input type="checkbox" name="test" id="conf">
	  Pincha aquí
	</label>
	<div  id="item" >
		<label class="text-primary">classes</label>
	</div>
</body>
</html>

<script type="text/javascript">
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

let elm = document.getElementById('item');

if(elm.className === 'green'){
    elm.className = 'red';
} else {
    elm.className = 'green';
}

</script>

