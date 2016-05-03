@extends('layouts.template')
@section('content')
    <h1>Update bedrijf</h1>
    {!! Form::model($user,['url'=>'apply/upload', 'method' => 'PATCH', 'files'=>true, 'route'=>['users.update',$user->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('active', 'active:') !!}
        {!! Form::select('role', array('Student' => 'Student', 'Teacher' => 'Teacher', Admin' => 'Admin' )); !!}
    </div>

    <div class="form-group">
        {!! Form::label('active', 'active:') !!}
        {!! Form::select('role', array('Inactive' => 'Inactive', 'Active' => 'Active')); !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop