@extends('layouts.app')

@section('content')
<div class="pt-4 pb-4">
  <a href="/todo/{{$todos->id}}" class="btn btn-info">Back</a>
  <h1>Create Todo</h1>
  {!! Form::open(['action' => ['TodolistController@update',$todos->id],'method'=>'POST']) !!}
      {{ Form::bsText('text',$todos->text) }}
      {{ Form::bsTextArea('body',$todos->body) }}
        {{ Form::bsText('due',$todos->due) }}
        {{ Form::hidden('_method','PUT') }}
        {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary']) }}
  {!! Form::close() !!}
</div>

@endsection
