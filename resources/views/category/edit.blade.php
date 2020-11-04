@extends('layouts.app')
@inject('user','App\User')
@inject('model' , 'App\Models\Category')


  @section('page_title')
    Edit Category
   @endsection

@section('content')
   

  <div class="box-body"> 

      {!! Form::model($model,[

         'action'  => ['Api\CategoryController@update' , $category->id ] ,
         'method'  => 'put',
       ]) 
       !!}


      @include('partials.error')

  <label for="name" > Category Name</label>
  {!! Form::text('name',$category->name,[
       
        'class' => 'form-control',
    
  ])
  !!}
        <div class="form-group" align="center" >
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> 

         {!! Form::close() !!}

  </div>

@endsection