@extends('layouts.app')
@inject('user','App\User')
@inject('model' , 'App\Models\Governorate')


  @section('page_title')
    Edit Governorate
   @endsection

@section('content')
   

  <div class="box-body"> 

      {!! Form::model($model,[

         'action'  => ['Api\GovernorateController@update' , $govern->id ] ,
         'method'  => 'put',
       ]) 
       !!}


      @include('partials.error')

  <label for="name" > Governorate Name</label>
  {!! Form::text('name',$govern->name,[
       
        'class' => 'form-control',
    
  ])
  !!}
        <div class="form-group" align="center" >
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> 

         {!! Form::close() !!}

  </div>

@endsection