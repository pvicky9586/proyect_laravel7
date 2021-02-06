@extends('layouts.app')
@section('title','- Bienvenidos')
@section('content')

<h1 class="title-curs" align="center">{{ $curso->title}}</h1>
<div style="margin-left:10%; margin-right:10%;">
			   
<!--  <small class="alert-danger text-9" align="right">Complete the following form for your participation in the course</small> -->   
     <form  method="POST" action="{{ route('save')}}" name="formulario" id="formulario"  onsubmit="return confirm('¿Are you sure to take this course??');">
			{{ csrf_field() }}
		
			
			
			<input type="checkbox" name="curso_id" value="{{ $curso->id }}" style="visibility:hidden" checked>
	
		<div class="title-div">
			<small class="title-op" style="float: center;">Personal information</small><br>
			<div style="">  				
				<input type="text" name="cedula"  class="slideselector"   autofocus placeholder="Identification card"  onkeyUp="return ValNumero(this);"  > 
				@error('cedula')
					<label class="alert-danger text-8">identification card obligatory | Invalid</label>
				@enderror
			 </div>
			 <div  style="padding-top:1%;">
				<input type="text"   name="name" class="slideselector" style="width:100%;" autocomplete="on" placeholder="Name(s)"> 
				@error('name')
					<label class="alert-danger text-8">Enter name</label>
				@enderror        
				<input type="text" name="last_name" autocomplete="on" style="width:100%;" placeholder="Last name(s)">
				@error('last_name')
				<label class="alert-danger text-8">Please provide at least one last name</label>
				@enderror
			 </div> 
		</div>
							
			<br>		

	 <div class="title-div"> 
	   		<label class="title-op">Course | Payment</label> 
	   		<div class="" style="display:flex;">
	   			<div>
	   				<img src="{{asset('images/Fpagos.png')}}" width="300" height="200" > 
	   			</div>
	   		   		 
		    		
		    	
		    	<div style="display: block; padding-left: 10%;">	
		    		<div>
		  				Payment method: 
						<select name="meth_pago">
							<option value="">Please select</option>
							<option value="Credito">Credit Card</option>
							<option value="Transf">Transfer</option>   		
						</select>
						@error('meth_pago')
						<label class="alert-danger text-8">Please select the payment method</label>
						@enderror
					
		  		    	<div class="text-danger h4">
		  		    		Reference: 				  					  			
				  			<input type="text" name="pago" style="padding:1%;font-size:1.5rem; " placeholder="Nro">
				  		</div>
				 
				  		@error('pago')
						<label class="alert-danger text-8">Please indicate the reference.</label>
						@enderror
					</div>		  		
		  		</div>
		  	</div>
		  	
	 </div> 




	 <br><br><br>
	 <div class="title-div">
		<label class="title-op">Contact information</label>     		
	     <div class="info">   		 			
			<DIV>E-mail
				<input type="email" class="form-control" name="email"  autocomplete="on" style=" font-size: 2rem;" > 
				@error('email')
				<label class="alert-danger text-8"> Invalid email</label>
				@enderror
			</DIV>
			<div>Phone
				<input type="text" class="form-control"  name="telef"  autocomplete="on"  onkeyUp="return ValNumero(this);" style=" font-size: 2rem;" >  
		    </div>
	        <div>
				<label>WhatsApp</label> 
				<input  type="text" name="NroWp" class="form-control" style=" font-size: 2rem;" />
		    </div>     
		 </div>
	</div>







		 <input type="submit" name="btnsave" class="tex-bt btn btn-primary btn-lg btn-block" value="Save"/>
         <input type="reset" value="Clear" class="btn btn-danger bt-canc" >
      </form>
	 </div>



@endsection

<script src="{{ asset('js/validar.js') }}"></script>


<script src="{{ asset('js/forms.js') }}"></script>
