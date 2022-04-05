@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')
   
    {!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <h1 class="editpost">Edit Post</h1>
    <hr>
    <div class="row" style="margin-top: 5px;">
        
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('slug', 'Slug:', ['class' => 'margin-top']) }}
            {{ Form::text('slug', null, ["class" => 'form-control']) }}  
            
            {{ Form::label('category_id', 'Category:',  ['class'=>'margin-top']) }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

            {{ Form::label('tags', 'Tag:',  ['class'=>'margin-top']) }}
            {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

            {{ Form::label('body', 'Content:', ['class' => 'margin-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>
        <div class="col-md-4">
            <div class="well btn-basic">
                <dl class="dl-horizontal text-center">
                    <dt>Create At:</dt>
                    <dd>{{ date('M j, Y H:i a', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal text-center">
                    <dt>Last Update:</dt>
                    <dd>{{ date('M j, Y H:i a', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                        
                    </div>

                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show','Cancel', array($post->id), array('class'=> 'btn btn-danger btn-block')) !!}
                    </div>
                </div>
        </div>
        
    </div> <!-- end of .row (form) -->
    {!! Form::close() !!}

@endsection

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! $post->tags()->allRelatedIDs() !!}).trigger('change');
    </script>

@endsection