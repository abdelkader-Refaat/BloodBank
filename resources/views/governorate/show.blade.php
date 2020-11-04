@extends('layouts.app')


@section('page_title')
    Show Governorate
   @endsection


   @section('content')


    <h1>Showing {{ $show->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $show->name }}</h2>
		<p>
			<strong>Governorate : </strong> {{ $show->name }}
		</p>
	</div>



    @endsection