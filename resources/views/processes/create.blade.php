@extends('admin.master')

@section('page-header')
	Procesos <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => 'processes.store',
			'files' => true
		])
	!!}

		@include('processes.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
		
@stop
