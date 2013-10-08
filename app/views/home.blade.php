@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
@parent
: Home
@stop

@section('styles')
@stop


@section('content')
	<div class="hero-unit">
		<h1>Hello, Welcome to e-docs!</h1>
		<p>A library retaining documentation for the Royal University of Agriculture Cambodia</p>
		<p>
			<a  class="btn btn-primary btn-large" href="{{ URL::to('/search') }}">
			Search Now
			</a>
		</p>
	</div>

	<!-- Example row of columns -->
	<div class="row">
	<div class="span4">
	  <h2>Heading</h2>
	  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	  <p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
	<div class="span4">
	  <h2>Heading</h2>
	  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	  <p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
	<div class="span4">
	  <h2>Heading</h2>
	  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	  <p><a class="btn" href="#">View details &raquo;</a></p>
	</div>
	</div>
@stop
