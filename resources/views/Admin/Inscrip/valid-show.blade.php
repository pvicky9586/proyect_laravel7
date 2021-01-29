<div>
  
 <h1 class="display-6 text-primary text-center">{{$CursSelec->title}}</h1>        
 <label>Listado de aspirantes al curso</label>
   <form method="post" action="{{route('ConfSave')}}"> 
    @csrf
    <?php $cont=1; ?>
    <ul>
      @foreach($parts as $part)
       @foreach($inscs as $index=>$insc)
        
          @if(($part->id == $insc->part_id) && ($CursSelec->id == $insc->curso_id))
           
            @if($insc->conf == 1)
                <li class="text-success">              
                    <label>
                      <input type="checkbox" wire:model="conf" name="conf[]" id="conf" value="{{$insc->id}}">
                       {{$part->name}}{{$part->last_name}}
                      <img src="{{asset('images/icons/checked.jpg')}}" width="30"></label>
                </li>            
            @else
                <li class="text-muted">              
                    <input type="checkbox" wire:model="conf" name="conf[]" id="conf" value="{{$insc->id}}">
                    {{$part->name}}{{$part->last_name}}
                </li>
           @endif
           
          @endif
        @endforeach
      @endforeach
  
      </ul>
      <input type="text" name="curso" style="visibility: hidden;" value="{{$CursSelec->id}}">

      <button  wire:click="ConfSave" type="sumit"  class="btn btn-success"> Actualizar lista</button>
</form>
<!-- wire:click="ConfSave" -->
      
<!-- 
<button wire:click="export">
    Download File
</button> -->



</div>




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

</script>

<!-- <script src="{{ asset('js/conf.js') }}"></script> -->
