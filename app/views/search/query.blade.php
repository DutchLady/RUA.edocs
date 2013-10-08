@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
@parent
{{ $title }}
@stop

@section('styles')
	body {
		background-color: #f5f5f5;
	}
	
	.white-container {
		padding: 30px;
		background-color: #fff;
		border: 1px solid #e5e5e5;
		margin-bottom: 10px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		box-shadow: 0 1px 2px rgba(0,0,0,.05);
	}

	.gray-container {
		padding: 30px;
		background-color: #FCFCFC;
		border: 1px solid #e5e5e5;
		margin-bottom: 10px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		box-shadow: 0 1px 2px rgba(0,0,0,.05);
	}
	
	.centered {
		max-width: 800px;
    	margin: 0 auto;
	}

	#footer {
        background-color: #FFFFFF;
      }

@stop


@section('content')
	<div class="white-container">
		<div class="row centered">
			<div class="span2">
			<div class="btn-group pull-right" data-toggle="buttons-radio">
			<button class="btn active">All</button> {{-- Still doesnt work yet --}}
			<button class="btn">Date</button> {{-- Still doesnt work yet --}}
			</div>
			</div>
			<div class="span4">
			<form class="form-search" method="POST" action="{{ URL::to('search') }}" accept-charset="UTF-8">
				<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
			<div class="input-append">
			<input type="text" class="span4" type="text" name="searchterm" id="searchterm">
			<button type="submit" class="btn btn-primary" type="submit">Search</button>
			</div>
			</form>
			</div>
		</div>
	</div>

	@if (!empty($results))
	<div class="white-container">
		@foreach($results as $result)
		<?php
		$datestring = $result->created_at;
		$datetime = DateTime::createFromFormat('Y-m-d H:i:s', $datestring);	
		?>
		<div class="gray-container">
			<ul>
				<li>
				<p><b>Author: </b>{{ $result->author }}</p>
				<p><b>Book: </b>{{ $result->name }}</p>
				<p><b>Year: </b>{{ $datetime->format('Y-m-d') }}</p>
				<p><b>Download: </b><a href={{ URL::to('download/'.$result->file ) }}>Link</a></p>
				<p><b>Synopsis: </b>{{ $result->content }}</p>
				</li>
			</ul>
		</div>
		@endforeach
	</div>
	@elseif (isset($term))
	<div class="white-container">
	<p>Your search <b>{{$term}}</b> did not match any documents.</p>
	<p>Suggestions:</p>
	<ul>
		<li>Try different keywords.</li>
		<li>Try more general keywords.</li>
		<li>Try fewer keywords.</li>
	</div>
	@endif

@stop