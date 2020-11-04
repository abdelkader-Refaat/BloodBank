@extends('layouts.app')

  @section('page_head')
   Cities
   @endsection

   @section('content')
   

  <div class="box-body">
   
   {{-- @include('flash::message') --}}

     <i class="fas fa-spinner fa-spin"></i>

   <a href="{{ Route('city.create')}}">

      <button class="btn btn-primary"><i class="fas fa-plus"></i> New City</button>
   </a> 
     @if($records)

      <div class="tabe-responsive">

        <table class="table table-bordered ">
          <thead class="text-center">
            <tr class="text-center">
              <td >#</td>
              <td>City</td>
              {{-- <td>Governorate</td> --}}
              <td> Edit </td>
              <td>Delete</td>
              <td>show</td> 
            </tr>
          </thead>
          <tbody class="text-center">
            @foreach($records as $record)
            <tr> 
            <td>{{$record->id}}</td>            
            <td>{{$record->name}}</td>
            {{-- <td>{{$govs}}</td> --}}
            <td><a href="{{route('city.edit',$record->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a></td>
            <td>
              {!! Form::open([
                 
                 'action' => [ 'Api\CityController@destroy' , $record->id] ,
                 'method' => 'DELETE'

                ]) !!}

                 <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
             {!! Form::close() !!}

           </td>
            <td><a href="{{route('city.show',$record->id)}}"><button type="submit" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></button></a></td>
            <td>
             


            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

     @else
      <div class="alert alert-danger" role = 'alert'>
        
        <span>no data </span>
      </div>
     @endif

  </div>
  @endsection

