@extends('layouts.app')

  @section('page_head')
   Categories
   @endsection

   @section('content')
   

  <div class="box-body">
   
   {{-- @include('flash::message') --}}

     <i class="fas fa-spinner fa-spin"></i>

   <a href="{{ Route('category.create')}}">

      <button class="btn btn-primary"><i class="fas fa-plus"></i> New Category</button>
   </a> 
     @if($records)

      <div class="tabe-responsive">

        <table class="table table-bordered ">
          <thead class="text-center">
            <tr class="text-center">
              <td >#</td>
              <td>Category</td>
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
            <td><a href="{{route('category.edit',$record->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a></td>
            <td>
              {!! Form::open([
                 
                 'action' => [ 'Api\CategoryController@destroy' , $record->id] ,
                 'method' => 'DELETE'

                ]) !!}

                 <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
             {!! Form::close() !!}
         
           </td>
           <td><a href="{{route('category.show',$record->id)}}"><button type="submit" class="btn btn-success btn-xs"><i class="fas fa-eye"></i></button></a></td>
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

