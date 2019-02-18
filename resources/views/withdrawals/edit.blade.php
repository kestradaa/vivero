@extends('admin.master')

@section('page-header')
	Retiro <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($withdrawal, [
			'route' => ['withdrawals.update', $withdrawal],
			'method' => 'put',
		])
	!!}

		@include('withdrawals.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop

@section('js')
	@include('withdrawals.partials.js')
@stop