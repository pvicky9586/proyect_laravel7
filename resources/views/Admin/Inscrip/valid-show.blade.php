<div>
  
 <h1 class="display-6 text-primary text-center">{{$CursSelec->title}}</h1>        
 <label>Listado de aspirantes al curso</label><br><br>

    @if (session('alert'))
          <div class="alert alert-danger">             
            {{ session('alert') }}
          </div>
    @endif
       @if (session('conf'))
          <div class="alert alert-success">             
            {{ session('conf') }}
          </div>
         @endif
      
    <?php $cont=1; ?>
    <?php $si=''; ?>
    <ul>
      @foreach($parts as $part)
       @foreach($inscs as $index=>$insc)
        
          @if(($part->id == $insc->part_id) && ($CursSelec->id == $insc->curso_id))
             <?php $si=1; ?>
            @if($insc->conf == 1)
                <li class="text-success">                    
                    <input type="checkbox" name="conf[]" wire:model="insc_id" 
                    wire:click="conf({{ $insc->id }})" id="conf" value="{{$insc->id}}" style="visibility: hidden;">
                       {{$part->name}}{{$part->last_name}}
                      <img src="{{asset('images/icons/checked.jpg')}}" width="30"></label>
                      &nbsp; &nbsp;  <input type="button" value="x" wire:click="destroy({{ $insc->id }})" class="" >
                  </li>  
          
            @else
                <li class="">              
                    <input type="checkbox"  name="conf[]" wire:model="insc_id" 
                    wire:click="conf({{ $insc->id }})" id="conf" value="{{$insc->id}}" onclick="conf()">
                    {{$part->name}}{{$part->last_name}}
                    &nbsp; &nbsp;  <input type="button" value="x" wire:click="destroy({{ $insc->id }})" class="" >
                </li>
            @endif

          @endif

        @endforeach
      @endforeach


  

   
      </ul>
    <input type="text" wire:model="CursSelec" name="curso" style="visibility: hidden;" value="{{$CursSelec->id}}">
    @if($si==1)
     <a href="{{route('ConfPDF',$CursSelec->id)}}" class="btn btn-success">Imprimir lista</a>
    @else
     <p> <strong>no hay inscritos</strong></p>
    @endif
<!-- wire:click="ConfSave" -->
<!-- wire:click="cancelar"  -->
      
<!-- 
<button wire:click="export">
    Download File
</button> -->



<!-- <label for="test">
  <input type="checkbox" name="test" id="test">
  Pincha aquí
</label>



<script type="text/javascript">
var checkbox = document.getElementById('test');

checkbox.addEventListener( 'change', function() {
    if(this.checked) {
       alert('checkbox esta seleccionado');
    }
});
</script> -->

</div>

