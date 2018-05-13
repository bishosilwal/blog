@extends('layouts.app')

@section('content')
    <a href="{{url('/posts')}}" class="btn btn-default">Go Back</a>
    <h2>{{ $post->title}}</h2>
    <div>
        {!!$post->body!!}
    </div>

    <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id === $post->user_id)
            <a href="{{url('/posts')}}/{{$post->id}}/edit" class="btn btn-default" >Edit</a>

            {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=>'pull-right'])!!}
                {{Form::hidden('_method','Delete')}}
                {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif    
    @endif    
@endsection