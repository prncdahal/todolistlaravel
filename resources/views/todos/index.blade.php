@extends('layouts.app')

@section('content')
  <div class="pt-4 pb-5">
    <h1 class="mb-4">Todo List</h1>
      <div class="card " >
        <ul class="list-group list-group-flush">
          @if(count($todos)>0)
            @foreach($todos as $todo)
            <li class="list-group-item">
              <span class="badge badge-info mr-3">{{$todo->id}}</span>

              <a href="todo/{{$todo->id}}">{{$todo->text}}</a>
              <span class="ml-3 badge badge-danger">{{$todo->due}}</span>
            </li>
            @endforeach
          @endif
        </ul>
      </div>

  </div>

@endsection
