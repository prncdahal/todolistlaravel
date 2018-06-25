<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todos;
class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$todos=Todos::all();
        $todos=Todos::orderBy('created_at','desc')->get();
        return view('todos.index')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'text'=>'required',
        'body'=>'required',
        'due'=>'required'
      ]);

      // Create todo
      $todo=new Todos;
      $todo->text=$request->input('text');
      $todo->body=$request->input('body');
      $todo->due=$request->input('due');

      $todo->save();

      return redirect('/')->with('success','Todo Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $todo=Todos::find($id);
       return view('todos.show')->with('todos',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $todo=Todos::find($id);
      return view('todos.edit')->with('todos',$todo);
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
      $todo=Todos::find($id);
      $todo->text=$request->input('text');
      $todo->body=$request->input('body');
      $todo->due=$request->input('due');
      $todo->save();
      return redirect('/')->with('success','Todo Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo=Todos::find($id);
        $todo->delete();
        return redirect('/')->with('success','Todo Deleted');
    }
}
