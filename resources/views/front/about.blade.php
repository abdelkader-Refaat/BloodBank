@extends('front.master')

@section('content')
   <div class="about">
         <div class="container info">
            <div class="col-md-5">
                <h3>بنك الدم نمضى قدما لصحة أفضل</h3>
                <p>
                   {{ $settings->about_app}}
                </p>
                    <a href="{{route('visit.home')}}"> BACK  <i class="fas fa-backward"></i> </a>
            </div>
        </div>
    </div>    

@endsection