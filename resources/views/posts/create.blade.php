@extends('layouts.app')

@section('content')
   
    <h1>Create Post</h1>
        <form method="POST" enctype="multipart/form-data" action="{{action('PostsController@store')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label class="sr-only" for="title">Title</label>
            <input type="text" name = "title" class="form-control" id="title">
        </div>

        

        <div class="form-group">
            <label class="sr-only" for="body">Body</label>
            <textarea rows="7" class="form-control" name="body" id="article-ckeditor"></textarea>
        </div>

        <div class="form-group">
             <input type="file"  class="form-control" id="cover_image" name="cover_image"/>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
                
        </form>
    
 

@endsection