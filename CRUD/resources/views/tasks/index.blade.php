@extends('layouts.app')

@section('content')

    <h2>Task List</h2>
    <a href="{{route('tasks.create')}}" class="btn btn-primary mb-3">Add Task</a>


    @if(session('success'))

        <div class="alert alert-success"> {{ session('success') }}</div>
    @endif
    <table class="table table-bordered  ">
        <thead>
            <tr>
                <th class="text-danger">@</th>
                <th class="text-danger">Title</th>
                <th class="text-danger">Description</th>
                <th class="text-danger">Image</th>
                <th class="text-danger">Action</th>
            </tr>
        </thead>
         
        <tbody>
             @foreach($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration + $tasks->firstItem() - 1 }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td> 
                    <td>
                           @if($task->image)
                            <img src="{{ asset('storage/'.$task->image) }}" width="60">
                           @else
                                N/A
                           @endif      
                    </td>
                    <td>
                       <a href="#" class="btn btn-warning btn-sm">Edit</a>
                       <button class="btn btn-danger btn-sm">Details</button>
                    </td>
                </tr>
             @endforeach  
        </tbody> 
    </table>

    {{ $tasks->links() }}
@endsection    