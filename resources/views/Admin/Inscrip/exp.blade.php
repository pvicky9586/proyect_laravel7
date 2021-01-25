 
	<div style="height: 100hv;" class="">
		<div align="center">
			<img src="{{asset('images/reg.jpg')}}" width="300">  
	 		<h1 class="title-op">Detaills</h1>
	 	</div>
	<div align="center">
		

	  <h1 class="display-5 text-primary text-center"> {{$title}}</h1>

	  <?php $tam = strlen($description); ?>
				@if ($tam <= 200)                
					<small class="text-muted">{{$description}}</small>
                    <br> 
                @elseif ($tam > 200)
					<small class="text-muted"> <?php echo substr($description, 0, 100); ?> </small>                   
    			<details>
					<summary style="font-size: 1rem;"><b>mas...</b></summary>
					   <small class="text-muted"><?php echo substr($description, 100);?></small>
                  
				</details>
				@else
				    <p class="text-muted">Descripcion No disponible</p>
				@endif







 	@if(!empty($duracion))
		<small class="text-muted h3" > duration: {{$duracion}}   </small>
    @endif

  </div>

 </div>


