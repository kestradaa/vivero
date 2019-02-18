@extends('admin.master')

@section('page-header')
	Retiro <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => 'withdrawals.store',
			'files' => true
		])
	!!}

		@include('withdrawals.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
		
@stop

@section('js')
	@include('withdrawals.partials.js')
@stop