@extends('main')

@section('title', '| All Categories')


@section('content')

    <div class="row " >
        <div class="col-md-8 margin-top">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <th>{{ $category->name }}</th>
                        
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- end of .col-md-8 -->
        <div class="col-md-3 margin-top">
            <div class="well btn-basic">
            {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    <h2>New Category</h2>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name',null,['class' => 'form-control'], array('style'=>'background-color: #F8F8FF;')) }}           
                    {{ Form::submit ('Create New Category', ['class' => 'btn btn-primary btn-block']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection