@extends('layouts.app')

@section('content')
    <h1> Create Post </h1>
    {!! Form::open(['action'=> 'PostsController@store', 'method'=> 'POST','enctype'=> 'multipart/data']) !!}
        <div class="form-group">
            {{Form::label("title", 'Title')}}
            {{Form::text('title','',['class'=>'form-control', 'placeholder'=> 'Title of post'] )}}
        </div>
        <div class="form-group">
            {{Form::label("body", 'Body')}}
            {{Form::textArea('body','',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=> 'Body of post'] )}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection