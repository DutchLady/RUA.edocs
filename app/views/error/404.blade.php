@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
@parent
: Error 404
@stop

@section('styles')
	.center {text-align: center; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: auto;}
@stop


@section('content')
	<div class="hero-unit center">
    <h1>Page Not Found <small><font face="Tahoma" color="red">Error 404</font></small></h1>
    <br />
    <p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from</p>
    <p><b>Or you could just press this neat little button:</b></p>
    <a href="{{ URL::to('') }}" class="btn btn-primary btn-large" style="margin-bottom: 35px"><i class="icon-home icon-white"></i> Take Me Home</a>
  	</div>
@stop