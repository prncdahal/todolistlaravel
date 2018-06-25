@extends('layouts.app')

@section('content')
<div class="pt-4 pb-4">
  <h1>Create Todo</h1>
  {!! Form::open(['action' => 'TodolistController@store','method'=>'POST']) !!}
      {{ Form::bsText('text') }}
      {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary']) }}
  {!! Form::close() !!}
</div>

@endsection
