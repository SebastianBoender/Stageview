@extends('layouts.template')
@section('content')
    <h1>Update bedrijf</h1>
    {!! Form::model($book,['method' => 'PATCH','route'=>['books.update',$book->id]]) !!}
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
        {!! Form::text('image',null,['class'=>'form-control']) !!}
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
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop