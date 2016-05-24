@extends('layouts.template')
@section('content')
    <h1>Update bedrijf</h1>
    {!! Form::model($user,['method' => 'PATCH', 'route'=>['users.update',$user->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role', 'role:') !!}
        {!! Form::select('role', array('Admin' => 'Admin', 'Docent' => 'Docent', 'Student' => 'Student')); !!}
    </div>

    <div class="form-group">
        {!! Form::label('active', 'active:') !!}
        {!! Form::select('active', array('1' => 'Active', '0' => 'Inactive')); !!}
    </div>


    <div class="form-group">
        <select id="company" name="company">
        @foreach ($companies as $company)
            <option value='{{ $company->id }}'>{{ $company->compName }}</option>
        @endforeach
        </select>
    </div>


    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop