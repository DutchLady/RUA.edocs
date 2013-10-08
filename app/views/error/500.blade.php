@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
@parent
: Error 500
@stop

@section('styles')
	body {
		background-color: #f5f5f5;
	}
	
	.center {text-align: center; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: auto;}
@stop


@section('content')
	<div class="hero-unit center">
    <h1>Internal Server Error!<small><font face="Tahoma" color="red">Error 500</font></small></h1>
    <br />
    <p>We are having an internal server problem, please contact the admin.</p>
  	</div>
@stop