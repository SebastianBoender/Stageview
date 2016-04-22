@extends('layouts.template')

@section('content')
    <h1>Create Book</h1>
    {!! Form::open(['url' => 'books']) !!}
    <div class="form-group">
        {!! Form::label('compName', 'Bedrijfsnaam:') !!}
        {!! Form::text('compName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Author', 'Author:') !!}
        {!! Form::text('author',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publisher', 'Publisher:') !!}
        {!! Form::text('publisher',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::text('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tags', 'Tags, gescheiden door een komma') !!}
        {!! Form::text('tags',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
<!--        {!! Form::file('image') !!} -->
   <!-- @if(Session::has('error'))
      <p class="errors">{!! Session::get('error') !!}</p>
    </div>
    @endif -->
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
