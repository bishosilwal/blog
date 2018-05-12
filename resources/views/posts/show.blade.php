@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h2>{{ $post->title}}</h2>
    <div>
        {{$post->body}}
    </div>

    <small>{{$post->created_at}}</small>
@endsection