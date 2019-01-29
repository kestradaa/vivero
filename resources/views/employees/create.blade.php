@extends('admin.master')

@section('page-header')
	Personal <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => 'employees.store',
			'files' => true
		])
	!!}

		@include('employees.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop