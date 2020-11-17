@extends('layouts.app')

  @section('page_title')
   Governorates
   @endsection
@section('page_head')
  settings 
@endsection
@section('content')
   
  <div class="box-body"> 
   
   {{-- @include('flash::message') --}}

      <div class="tabe-responsive">

        <table class="table table-bordered ">

          <thead class="text-center">
            <tr class="text-center">
              <td >name</td>
              <td>value</td>  
              <td>edit</td>         
              <td>Delete</td>
            </tr>
          </thead>

          <tbody class="text-center">
            <tr>
              <td>id</td>
              <td>{{ $records->id }}</td>
              <td>
                <a href="{{route('settings.edit',$records->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a>
              </td>

              <td> 
                {!! Form::open([
                 
                 'action' => [ 'Api\SettingsController@destroy' , $records->id] ,
                 'method' => 'DELETE'

                ]) !!}
                <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
                {!! Form::close() !!}

             </td>
            </tr>  
            <tr>
              <td>tw_link</td>
              <td>{{ $records->tw_link }}</td>
              <td>

                <a href="{{route('settings.edit',$records->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a>                
              </td>

              <td> 
                {!! Form::open([
                 
                 'action' => [ 'Api\SettingsController@destroy' , $records->id] ,
                 'method' => 'DELETE'

                ]) !!}
                <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
                {!! Form::close() !!}

             </td>
            </tr><tr>
              <td>inst_link</td>
              <td>{{ $records->inst_link }}</td>
              <td>

                <a href="{{route('settings.edit',$records->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a>                
              </td>

              <td> 
                {!! Form::open([
                 
                 'action' => [ 'Api\SettingsController@destroy' , $records->id] ,
                 'method' => 'DELETE'

                ]) !!}
                <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
                {!! Form::close() !!}

             </td>
            </tr><tr>
              <td>notification_settings_text</td>
              <td>{{ $records->notification_settings_text}}</td>
              <td>

                <a href="{{route('settings.edit',$records->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a>                
              </td>

              <td> 
                {!! Form::open([
                 
                 'action' => [ 'Api\SettingsController@destroy' , $records->id] ,
                 'method' => 'DELETE'

                ]) !!}
                <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
                {!! Form::close() !!}

             </td>
            </tr><tr>
              <td>about_app</td>
              <td>{{ $records->about_app }}</td>
              <td>

                <a href="{{route('settings.edit',$records->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a>                
              </td>

              <td> 
                {!! Form::open([
                 
                 'action' => [ 'Api\SettingsController@destroy' , $records->id] ,
                 'method' => 'DELETE'

                ]) !!}
                <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
                {!! Form::close() !!}

             </td>
            </tr><tr>
              <td>phone</td>
              <td>{{ $records->phone }}</td>
              <td>

                <a href="{{route('settings.edit',$records->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a>                
              </td>

              <td> 
                {!! Form::open([
                 
                 'action' => [ 'Api\SettingsController@destroy' , $records->id] ,
                 'method' => 'DELETE'

                ]) !!}
                <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
                {!! Form::close() !!}

             </td>
            </tr><tr>
              <td>email</td>
              <td>{{ $records->email }}</td>
              <td>

                <a href="{{route('settings.edit',$records->id)}}"><button type="submit" class="btn btn-warning btn-xs"> <i class="fas fa-edit"></i></button></a>                
              </td>

              <td> 
                {!! Form::open([
                 
                 'action' => [ 'Api\SettingsController@destroy' , $records->id] ,
                 'method' => 'DELETE'

                ]) !!}
                <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i>
               </button>
                {!! Form::close() !!}

             </td>
            </tr>        
       </tbody>
        </table>
      </div>     
      <div class="alert alert-danger" role = 'alert'>
        
        <span>no  Altra data </span>
      </div>     
  </div>
@endsection