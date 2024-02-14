@extends('layouts.layout')

@section('content')
<a href="{{ route('task.create')}}" class="btn btn-secondary rounded-pill m-2">Create new task</a>
<h2 class="table-title">Tasks</h2>
<br>
<div class="container">
    <table class="table">
      <thead>
        <tr class="table-header">
          <th scope="col">Subject</th>
        </tr>
      </thead>
      <tbody class="table-body">
        @forelse ($tasks as $task)
          <tr>
              <td><a href="{{route('task.show', ['task' => $task->id])}}">{{$task->subject}}</a></td>
              <td><a class="btn btn-secondary rounded-pill" href="{{route('task.edit', ['task' => $task->id])}}">EDIT</a></td>
              <td>
                <form method="post" action="{{route('task.destroy', ['task' => $task->id])}}">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-secondary rounded-pill" value="DELETE">
                </form>
              </td>
            @empty
              <p>Nothing to do yet</p>
          </tr>
        @endforelse
      </tbody>
    </table>
    <!-- Línea final de la tabla -->
    <hr class="table-border-bottom">
  </div>
@endsection