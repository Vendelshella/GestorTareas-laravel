@extends('layouts.layout')

@section('content')
    <a href="{{ route('task.index')}}" class="btn btn-secondary rounded-pill mt-2 ml-2">Back</a>
    <div class="text-center">
        <div class="mb-5">
            <h1>{{$task->subject}}</h1>
        </div>
        
        
        <p>Task: {{$task->task_name}}</p>
        
        @if(isset($task->unit_number))
            <p>Units: {{$task->unit_number}}</p>
        @else
            <p>No units</p>
        @endif
          
        @if(isset($task->deadline))
            <p>Deadline: {{$task->deadline}}</p>
        @else
            <p>No deadline</p>
        @endif
    </div>
@endsection