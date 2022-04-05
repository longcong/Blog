@extends('main')

@section('title', "| $post->title")

@section('content')
  
        <div class="row">
            <div class="col-md-8 col-md-offset-2 margin-top3">
                
                <h1>{{ $post-> title }}</h1>
                <img src="{{ asset('images/' . $post->image) }}" height="300" width="400"/>
                <p style="margin-top:10px;">{{ $post-> body }}</p>
                <hr>
                <p>Posted In: {{ $post->category->name }}</p>
            </div>
        </div>
@endsection