@extends('layouts.app')

@section('content')
    <a href = '/posts' class="btn btn-info"> Back</a>
    <h1>{{$post->title}}</h1>
     @if ($post->cover_image != 'noimage.jpg')
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>   
    @endif
         

    <div>{!!$post->body!!}</div>
    <hr>
    <small> Written on {{$post->created_at}} by {{$post->user->name}}</small>

    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">
    Edit</a>
    <form method="POST" class="pull-right" action="{{action('PostsController@destroy', $post->id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn btn-danger">Delete</button>
                
        </form>

        @endif
        <br><br>

        
    @endif
    


    
    
 

@endsection