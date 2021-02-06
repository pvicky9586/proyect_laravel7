<div  style="display:flex; margin-right:2%; margin-left: 3%;">
<!-- 	@if ($ver === 1)
    <div style="margin-right:2%; width: 30%;" class="">
    	@include('Admin.Inscrip.exp') 
	</div>
	@endif
 -->
 		@if ($ver === 1)
 		
	    <div style="margin-right:1%; width: 40%;" class="">
	    	@include('Admin.Inscrip.show') 
		</div>
		@endif

		@if ($valid === 1)
		<div style="margin-right:2%; width: 30%;" class="">
	    	@include('Admin.Inscrip.valid-show')
	    </div>	
		@endif
	
   <div class="tool-table">
		@include('Admin.Inscrip.table')   
   </div>	
</div>
