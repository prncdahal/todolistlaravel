@extends('layouts.app')

@section('content')
<div class="pt-4">
  <a class="btn btn-info" href="/">Go back</a>
  <h2 class="pt-4">{{$todos->text}}</h2>
  <div class="badge badge-danger">
    {{$todos->due}}
  </div>
  <hr>
  <p class="lead">{{$todos->body}}</p>

  <br><br>
  <div class="d-flex pb-4">
    <a href="/todo/{{$todos->id}}/edit" class="btn btn-dark mr-4"><em class="fa fa-angle-left"></em>Edit</a>
    {!! Form::open(['action' => ['TodolistController@destroy',$todos->id],'method'=>'POST','class'=>'pull-right']) !!}
          {{ Form::hidden('_method','DELETE') }}
          {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
  </div>
</div>

@endsection
