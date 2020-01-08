@extends('layouts.app')
@section('content')
    <h1>Welcome to my todo Application</h1>
    <h3>Tasks</h3>
    @if(count($tasks)>0)
        <ul class="list-group">
            @foreach($tasks as $task)
                <li class="list-group-item">{{$task->task}}</li>
            @endforeach
        </ul>
    @endif
@endsection
