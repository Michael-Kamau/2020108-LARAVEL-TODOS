@extends('layouts.app')
@section('content')
    <h6>Edit Task</h6>
    {!! Form::open(['action'=>['TaskController@update',$task->id],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('task','Task')}}
        {{Form::text('task',$task->task,['class'=>'form-control','placeholder'=>'Task'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textArea('description',$task->description,['class'=>'form-control','placeholder'=>'Description'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-success'])}}

    {!! Form::close() !!}


@endsection
