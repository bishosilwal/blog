@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h2>{{ $post->title}}</h2>
    <div>
        {!!$post->body!!}
    </div>

    <small>{{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default" >Edit</a>

    {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method','Delete')}}
        {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection