@extends('layouts.app')
@inject('model', 'App\Models\Category')
@inject('user','App\User')


  @section('page_title')
    Category 
   @endsection

@section('content')
   

  <div class="box-body" align="center"> 
    

      
      {!! Form::model($model,[ 
       
         'action'  => ['Api\CategoryController@store'],
        ]) !!}


     @include('partials.error')
        

      
  </div>

 <div align="center" >
   <label for="name">Category Name</label>
   {!! Form::text('name',null,[
       
        'class' => 'form-control',
    
     ])
    !!}
    
        <div class="form-group" align="center" >
          <button type="submit" class="btn btn-primary">Submit</button>

        </div> 
 </div>

@endsection