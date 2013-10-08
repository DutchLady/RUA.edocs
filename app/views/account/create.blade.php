@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
@parent
: Signup
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Account Creation</h1>
</div>
{{ Confide::makeSignupForm()->render() }}
@stop
