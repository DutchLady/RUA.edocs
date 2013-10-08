@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
@parent
: Account Login
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Account Login</h1>
</div>
{{ Confide::makeLoginForm()->render() }}.
@stop
