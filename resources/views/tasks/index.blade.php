@extends('layouts.app')
@section('content')
    <h6>TO DO'S</h6>
    @if(count($tasks)>0)
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Task</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Set Complete</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
            <tr>
                <th scope="row">{{$task->id}}</th>
                <td>{{$task->task}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->status}}</td>
                <td>{{$task->created_at}}</td>
                <td>{{$task->updated_at}}</td>
                <td>{!!Form::open(['action' => ['TaskController@update', $task->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Set Complete', ['class' => 'btn btn-success'])}}
                    {!!Form::close()!!}</td>
                <td>{!!Form::open(['action' => ['TaskController@destroy', $task->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No tasks available</p>
    @endif


@endsection
