@extends('layouts.app')
@section('page_title')
    Show City
   @endsection


   @section('content')


    <h1>Showing {{ $show->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $show->name }}</h2>
		<p>
			<strong>city   : </strong> {{ $show->name }}<br>
			<strong>Governorate : </strong> {{ $show->governorate->name }}
		</p>
	</div>



    @endsection