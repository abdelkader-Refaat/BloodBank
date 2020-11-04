@extends('layouts.app')
@inject('user','App\User')
@inject('model','App\Models\City')
@inject('gov','App\Models\Governorate')



  @section('page_title')
    Edit City
   @endsection

@section('content')

  <div class="box-body"> 

      {!! Form::model($model,[

         'action'  => ['Api\CityController@update', $city->id ],
          'method'  => 'PUT',

       ]) 
       !!}

      @include('partials.error')

      <label for="name" > City Name</label>
      {!! Form::text('name',$city->name,[
       
        'class' => 'form-control',
    
      ])
      !!}

  {!! Form::select('governorate_id',['57' => 'Dakahlia','65' => 'Cairo', '58' => 'Gharbia' , '59' => 'sharqia' , '60' => 'ismailya' , '61' => 'banha', '62' => 'asyut', 
     '63' => 'alex' , '64' => 'poursaid'],null, ['placeholder' => 'Pick your Governorate'])
    
  !!}
        <div class="form-group" align="center" >
          <button type="submit" class="btn btn-primary">Submit</button>

        </div> 


         {!! Form::close() !!}

     
  </div>

@endsection