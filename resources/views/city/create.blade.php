@extends('layouts.app')
@inject('model', 'App\Models\City')
@inject('user','App\User')


  @section('page_title')
    create City
   @endsection

@section('content')
   

  <div class="box-body" align="center"> 
    

      
      {!! Form::model($model,[ 
       
         'action'  => ['Api\CityController@store'],
        ]) !!}


     @include('partials.error')
        

      
  </div>

 <div align="center" >
   <label for="name"> Name</label>
   {!! Form::text('name',null,[
       
        'class' => 'form-control',
    
     ])
    !!}
    {!!

      Form::select('governorate_id', ['57' => 'Dakahlia', '65' => 'Cairo', '58' => 'Gharbia' , '59' => 'sharqia' , '60' => 'ismailya' , '61' => 'banha', '62' => 'asyut', 
     '63' => 'alex' , '64' => 'poursaid'],null, ['placeholder' => 'Pick your Governorate']) 
    !!}
        <div class="form-group" align="center" >
          <button type="submit" class="btn btn-primary">Save</button>

        </div> 
 </div>

@endsection