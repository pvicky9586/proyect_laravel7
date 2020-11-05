<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class ParticipantsController extends Controller
{
	
	public function __construct(){
			$this->middleware('auth');
	}
  
  
  
     public function index(Request $request){
		  $part= App\Participants::paginate(10);
		return view('Participants.index',compact('part'));
	}

  
    public function create()
    {
        return view('Participants/new');
    }

 
    public function store(Request $request)
    {
        if(isset($_POST['btnsave'])){
			//$request->validate([ 'cedula' => 'required','cant_resps' => 'required']);
				$NewPart = new App\Participants;
				$NewPart->cedula = $request->cedula;				
				$NewPart->name = $request->name;
				$NewPart->last_name = $request->last_name;
				$NewPart->user_created = Auth::user()->id;
				$NewPart->save(); 
				
			return redirect()->route('participants')->with('mensaje','Nuevo Registro agregado');
			}
			            
			
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$watch = App\Participants::findOrFail($id);  
        return view('Participants.ver',compact('watch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPart = App\Participants::findOrFail($id);  
        return view('Participants.editar',compact('editPart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
