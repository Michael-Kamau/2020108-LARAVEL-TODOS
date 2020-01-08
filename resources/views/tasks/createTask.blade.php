@extends('layouts.app')
@section('content')
    <h6>Create Task</h6>
    {!! Form::open(['action'=>'TaskController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('task','Task')}}
        {{Form::text('task','',['class'=>'form-control','placeholder'=>'Task'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textArea('description','',['class'=>'form-control','placeholder'=>'Description'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-success'])}}

    {!! Form::close() !!}


@endsection

