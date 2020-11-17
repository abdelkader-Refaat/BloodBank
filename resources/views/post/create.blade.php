@extends('layouts.app')
@inject('model', 'App\Models\Post')
@inject('user','App\User')


  @section('page_title')
    Post 
   @endsection

@section('content')
   

  <div class="box-body" align="center"> 
      
      {!! Form::model($model,[ 
         'action'  => ['Api\PostController@store'],
        ]) !!}
     @include('partials.error')
      
  </div>

 <div align="center" >
   <label for="title">Title</label>
   {!! Form::text('title',null,[
       
        'class' => 'form-control',
    
     ])
    !!}
       <label for="image">Image</label>

   {!! Form::text('image',null,[
       
        'class' => 'form-control',
    
     ])
    !!}
       <label for="content">Content</label>

   {!! Form::text('content',null,[
       
        'class' => 'form-control',
    
     ])
    !!}
    
        <div class="form-group" align="center" >
          <button type="submit" class="btn btn-primary">Submit</button>

        </div> 
 </div>

@endsection