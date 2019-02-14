@extends('admin.master')

@section('page-header')
	Procesos <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($process, [
			'route' => ['processes.update', $process],
			'method' => 'put',
		])
	!!}

		@include('processes.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop