@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
@parent
: Password Recovery
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Password Recovery</h1>
</div>
{{ Confide::makeForgotPasswordForm()->render() }}
@stop
