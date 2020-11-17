@extends('layouts.app')

@section('page_title')
    Error 
   @endsection
   @section('content')
   <div class="col-md-6">
            <div class="card card-danger text-center">
              <div class="card-header text-center">
                <h3 class="card-title text-center">sorry you are not authorized fot this action</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body text-center">
                you are not authorized for this role
               </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
   
   @endsection
