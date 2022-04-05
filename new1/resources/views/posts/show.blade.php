@extends('main')

@section('title', '| View Post')

@section('content')

    <div class="row" style="margin-top: 18px;">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1> 
            <p class="lead">{{ $post->body}}</p>
            <hr>
            <div class="tags">
                @foreach ($post->tags as $tag)
                    <span class="label">{{ $tag -> name }}</span>
                @endforeach
            </div>
        </div>
    
        <div class="col-md-4 btn-basic">
            <div class="well">
                <dl class="dl-horizontal text-center">
                    <label>Url:</label>
                    <p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
                </dl>
                <dl class="dl-horizontal text-center">
                    <label>Category_id:</label>
                    <p>{{ $post->category->name }}</p>
                </dl>
                <dl class="dl-horizontal text-center">
                    <label>Create At:</label>
                    <p>{{ date('M j, Y H:i a', strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal text-center">
                    <label>Last Update:</label>
                    <p>{{ date('M j, Y H:i a', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit','Edit', array($post->id), array('class'=> 'btn btn-primary btn-block')) !!}
                    </div>

                    <div class="col-sm-6">

                        {{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $post->id), 'onsubmit' => 'return confirm_delete()')) }} 
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) }}
                        {{ Form::close() }}
                    </div>
                    
                </div>
                <br>
                <div class="row1">
                    <div class="col-md-12">
                        {{ Html::linkRoute('posts.index', '<< See All Post', [], array(), ['class' => 'btn btn-basic btn-block btn-row2' ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop