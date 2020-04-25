@extends('admin.default')

@section('page-header')
	Agent <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['AgentController@store'],
			'files' => true
		])
	!!}

		@include('admin.agents.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
