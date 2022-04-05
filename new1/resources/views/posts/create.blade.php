@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    

@endsection

@section('content')

    <div class="row">
        <div class="col-md  col-md-offset-2">
            <br>
            <h1 class="text-center">Create New Post</h1>
            <hr> 
            
            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => 'true')) !!}
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('slug', 'Slug:', array('class'=>'margin-top')) }}
                {{ Form::text('slug', null, array('class'=>'form-control', 'required' => '', 'minlength' => '5', 'maxlength'=>'255')) }}

                {{ Form::label('category_id', 'Category:', array('class'=>'margin-top')) }}
                <select class="form-control" name="category_id" >
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category-> name }}</option>
                    @endforeach
                </select>

                {{ Form::label('tags', 'Tags:', array('class'=>'margin-top')) }}
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag-> name }}</option>
                    @endforeach
                </select>

                {{ Form::label('featured_image', 'Upload Image:', array('class'=>'margin-top3')) }}
                {{ Form::file('featured_image', array('class'=>'margin-top3') ) }}
                <br>

                {{ Form::label('body', 'Content:',array('class'=>'margin-top')) }}
                {{ Form::textarea('body', null, array('class'=> 'form-control', 'required' => '')) }}
                <br>
                {{ Form::submit('Create Post', array('class'=> 'btn btn-succes btn-lg btn-block', 'style'=>'background-color: #00CC99;')) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>

@endsection