<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App;

class RegisterController extends BaseController
{
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // function imprimir(){

    // 	$nombre= 'Mario';
    // 	$pdf = \PDF::loadView('pdf',compact('nombre'));
    // 	return $pdf->download('pdf.pdf');
    // }



 public function __construct(){
    $this->middleware('auth');
  }


	public function index(){
		 $users = App\User::paginate(10);
		return view('auth/AdmUsers/tool',compact('users'));
	}

	public function ver($id){
	 	$user = App\User::findOrFail($id);
		return view('auth/AdmUsers/detalle',compact('user'));
	}

	public function create(){
		return view('auth/register');
	}




	public function saveUser(Request $request){

        
		$request->validate([
        'username' => 'required|min:5|max:10|unique:users',
        'privileges' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|max:10|confirmed',
    ]); //|alph
        $NewUser = new App\User;
        // $NewUser->cedula = $request->cedula;
        $NewUser->name = $request->name;
        $NewUser->last_name = $request->last_name;
        $NewUser->username = $request->username;
        $NewUser->privileges = $request->privileges;
        $NewUser->email = $request->email;
        $NewUser->password = bcrypt($request->password);
        $NewUser->id_user_created = $request->id_user_created;
		$NewUser->save();
		
		 return redirect()->route('AdmUser')->with('mensaje','Usuario Registrado !!!');
	}




}
