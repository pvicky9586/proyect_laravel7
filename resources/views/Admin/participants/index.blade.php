@extends('layouts.appAdmin')
@section('title','- Participants ')
@section('content')

<div class="title" ><b>Participant's</b></div> 
	   
	
<div class="">	
    @livewire('participants-component')       
</div>     


@endsection
