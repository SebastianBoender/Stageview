@extends('layouts.template')
@section('content')
    <h1>Update group</h1>
    {!! Form::model($group,['method' => 'PATCH', 'route'=>['groups.update',$group->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop