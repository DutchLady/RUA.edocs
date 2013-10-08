@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
@parent
: Password Reset
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Reset Your Password</h1>
</div>
{{ Confide::makeResetPasswordForm($token)->render() }}
@stop
