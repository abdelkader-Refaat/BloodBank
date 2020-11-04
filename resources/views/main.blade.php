@extends('layouts.app')
@inject('user','App\User')

  @section('page_title')
   Dashboard
   @endsection
   @section('small')
   statistics
   @endsection
@section('content')
{{-- <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bookmarks</span>
                <span class="info-box-number">{{$user->all()->last()->id}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
  </div> --}}



@endsection