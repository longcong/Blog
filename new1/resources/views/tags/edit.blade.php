@extends('main')

@section('title', "| Edit Tag")

@section('content')

    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}

        {{ Form::label('name', "Name:")}}
        {{ Form::text('name', null, ['class' => 'form-control'])}}

        {{ Form::submit('Save Change', array('class' => ' btn btn-success', 'style' => 'margin-top: 8px;'))}}

    {!! Form::close() !!}

@endsection