@extends('layouts.app')
@inject('model', 'App\Models\Governorate')
@inject('user','App\User')


  @section('page_title')
    create Governorates
   @endsection

@section('content')
   

  <div class="box-body"> 
    

      {!! Form::model($model,[ 
       
         'action'  => ['Api\GovernorateController@store'] 
        ]) !!}

     @include('partials.error')

  <div align='center'><label for="name">Governorate Name</label></div>
  {!! Form::text('name',null,[
       
        'class' => 'form-control',
    
  ])
  !!}
        <div class="form-group" align="center" >
          <button type="submit" class="btn btn-primary">Submit</button>

        </div> 

         
  </div>



@endsection