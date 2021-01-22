<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

//integrar meth store a comp-livew 'MenuCursosInscComm'
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
     if(isset($_POST['btnsave'])){
        $request->validate([ 
            'name' => 'required', 
            'email' => 'required|email', 
            'comment' => 'required'
        ]);
        $SaveCom = new Comment;
        $SaveCom ->name =$request->name;
        $SaveCom ->email =$request->email;
        $SaveCom ->comment =$request->comment;
        $SaveCom ->curso_id =$request->curso_id;
        $SaveCom->save();
        return redirect()->route('cursos.index')->with('mensaje','Comment sent');;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
