@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h2>{{ $post->title}}</h2>
    <div>
        {!!$post->body!!}
    </div>

    <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default" >Edit</a>

    {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method','Delete')}}
        {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection