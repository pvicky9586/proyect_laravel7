<div>

                 @if (session('mensaje'))
					<div class="alert alert-success">             
						{{ session('mensaje') }}
					</div>
				 @endif
			 <br>
                
	<input type="text" class="search-input"  wire:model="searchPart"  placeholder="Buscar" >           
	                
	<table class="table">   		
		<thead class="thead-dark"> 			
		<tr align="center">        			
			<th>Curso</th>
			<th>Inscritos N°</th>
		</tr>
		</thead>
		<tbody> 
			
			

			   	
		<?php $ArrayCurs[] = ''; ?> 
		
		
	  	@foreach($insc as $i) 
	  	 <?php $cont = 0; ?>
	  	 <tr style="background: #ADD8E6" >   	     	  	
	  	 <?php $curs = $i->id_curso; ?> 
	  	 <?php $ArrayCurs[] = $curs; ?> 
	  
		  
		  
		  
		          
		 @foreach($insc as $j) 			         
			@if ($i->id_curso == $j->id_curso)   			   
			        <?php $cont = $cont+1; ?>   				
	        @endif  
	        
	        			
		 @endforeach 
		 
		 @foreach ($cursos as $curso)
			
			
			@if($i->id_curso == $curso->id)
				<td>{{ $curso->title}} </td> 
				@break
			@endif 
			
	     @endforeach
		       <td align="center">{{$cont}} </td> 
		  </tr>
		    
		   
		@endforeach	  
		
		
		<body>
		

		</table> 
		
		  {{ $Total}}
			  
	       <br>
		  @foreach ($ArrayCurs as $array)
		  <?php  ?>
		  
		  {{$array}}
		  
		  @endforeach
	  	
         
		
     
 </div>
    
  
