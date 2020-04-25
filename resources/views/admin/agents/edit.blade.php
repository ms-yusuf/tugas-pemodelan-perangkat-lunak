@extends('admin.default')

@section('page-header')
	Agent <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['AgentController@update', $item->id],
			'method' => 'put', 
			'files' => true
		])
	!!}

		@include('admin.agents.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
