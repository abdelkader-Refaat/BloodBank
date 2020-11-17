@extends('layouts.app')
@inject('user','App\User')
@inject('model' , 'App\Models\Post')


  @section('page_title')
    Edit Post
   @endsection

@section('content')
   

  <div class="box-body"> 

      {!! Form::model($model,[

         'action'  => ['Api\PostController@update' , $post->id ] ,
         'method'  => 'put',
       ]) 
       !!}


      @include('partials.error')

  <label for="title" > Post Title</label>
  {!! Form::text('title',$post->title,[
       
        'class' => 'form-control',
    
  ])
  !!}
  <label for="image" > Post Image</label>
  {!! Form::text('image',$post->image,[
       
        'class' => 'form-control',
    
  ])
  !!}
  <label for="content" > Post Content</label>
  {!! Form::text('content',$post->content,[
       
        'class' => 'form-control',
    
  ])
  !!}
        <div class="form-group" align="center" >
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> 

         {!! Form::close() !!}

  </div>

@endsection