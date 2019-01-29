@extends('admin.master')

@section('page-header')
	Retiro <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($whitdrawal, [
			'route' => ['whitdrawals.update', $whitdrawal],
			'method' => 'put',
		])
	!!}

		@include('whitdrawals.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop