@extends('layouts.app')

@section('content')
   
    <h1>Edit Post</h1>

        @if (Session::has('serverError'))
            <p class="alert alert-danger">{{Session::get('serverError')}}</p>
        @endif
        <form method="POST" enctype="multipart/form-data" action="{{action('PostsController@update', $post->id)}}">
        {{csrf_field()}}
        <div class="form-group">
            <label class="sr-only" for="title">Title</label>
            <input type="text" value="{{$post->title}}" name = "title" class="form-control" id="title">
        </div>

        

        <div class="form-group">
            <label class="sr-only" for="body">Body</label>
            <textarea rows="7" class="form-control" name="body"  id="article-ckeditor">{!! $post->body  !!}</textarea>
        </div>

        <div class="form-group">
             <input type="file"  class="form-control" id="cover_image" name="cover_image"/>
        </div>

        <input name="_method" type="hidden" value="PUT">
        <button type="submit" class="btn btn-primary">Submit</button>
                
        </form>
    
 

@endsection