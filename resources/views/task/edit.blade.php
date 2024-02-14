@extends('layouts.layout')

@section('content')
<a href="{{ route('task.index')}}" class="btn btn-secondary rounded-pill mt-2 ml-2">Back</a>
<h2 class="table-title">Task Edit</h2>
<form action="{{ route('task.update', $task->id) }}" method="post" class="custom-form">
    @method('PUT')
    @csrf
    <div class="mb-3 text-center">
        <label for="" class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject" id="" value="{{$task->subject}}"><br>
        @error('subject')
        <p class="alert alert-danger">{{$message}}</p>
        @enderror
    </div>
    
    <div class="mb-3 text-center">
        <label for="" class="form-label">Task Name</label>
        <input type="text" class="form-control" name="task_name" id="" value="{{$task->task_name}}"><br>
        @error('task_name')
        <p class="alert alert-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3 text-center">
        <label for="" class="form-label">Unit Number</label>
        <input type="text" class="form-control" name="unit_number" id="" value="{{$task->unit_number}}"><br>
        @error('unit_number')
        <p class="alert alert-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3 text-center">
        <label for="" class="form-label">Deadline</label>
        <input type="text" class="form-control" name="deadline" id="" value="{{$task->deadline}}" placeholder="DD/MM/YYYY"><br>
        @error('deadline')
        <p class="alert alert-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="text-center">
        <input type="submit" value="Update" class="btn btn-secondary rounded-pill">
    </div>
</form>
@endsection