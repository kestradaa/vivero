@extends('admin.master')

@section('page-header')
	Retiros <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => 'whitdrawals.store',
			'files' => true
		])
	!!}

		@include('whitdrawals.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop