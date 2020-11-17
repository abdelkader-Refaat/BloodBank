@extends('layouts.app')


@section('page_title')
    Show Post
   @endsection


   @section('content')


    <h1>Showing {{ $show->title }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $show->title }}</h2>
		<p>
			<strong> </strong> {{ $show->title }}
		</p>
			</div>
		<div class="jumbotron text-center">
				<h2>{{ $show->image }}</h2>
				<p>
					<strong> </strong> {{ $show->image }}
				</p>
		</div>
		<div class="jumbotron text-center">
				<h2>{{ $show->content }}</h2>
				<p>
					<strong> </strong> {{ $show->content }}
				</p>
		</div>



    @endsection