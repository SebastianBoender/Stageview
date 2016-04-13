@extends('layouts.template')

@section('content')
    <h1>Creëer bedrijf</h1>
    {!! Form::open(['url'=>'apply/upload','method'=>'POST', 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('compName', 'Bedrijfsnaam:') !!}
        {!! Form::text('compName',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Title', 'Beschrijving:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Author', 'Contactpersoon:') !!}
        {!! Form::text('author',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publisher', 'Email-adres:') !!}
        {!! Form::text('publisher',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Afbeelding:') !!}
        {!! Form::file('image') !!}
    </div>
    <div class="form-group">
        {!! Form::label('review', 'Review:') !!}
        {!! Form::textarea('review',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location', 'Locatie') !!}
        {!! Form::text('location',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tags', 'Tags, gescheiden door een komma') !!}
        {!! Form::text('tags',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop