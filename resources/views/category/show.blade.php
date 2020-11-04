@extends('layouts.app')
@section('page_title')
    Show Category
   @endsection


   @section('content')


    <h1>Showing {{ $show->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $show->name }}</h2>
		<p>
			<strong>Category   : </strong> {{ $show->name }}<br>
		</p>
	</div>



    @endsection