@extends('layouts.appAdmin')
@section('title','- Participants ')
@section('content')

<div class="title" ><b>Participant's</b></div> 
	   
	
<div class="toll">	
    @livewire('participants-component')       
</div>     


@endsection
