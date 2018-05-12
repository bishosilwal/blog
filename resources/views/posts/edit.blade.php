@extends('layout.app')

@section('content')
    <h1> Edit Post </h1>
    {!! Form::open(['action'=> ['PostsController@update', $post->id], 'method'=> 'POST']) !!}
        <div class="form-group">
            {{Form::label("title", 'Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control', 'placeholder'=> 'Title of post'] )}}
        </div>
        <div class="form-group">
            {{Form::label("body", 'Body')}}
            {{Form::textArea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=> 'Body of post'] )}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection