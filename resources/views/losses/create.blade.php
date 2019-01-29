@extends('admin.master')

@section('page-header')
	Perdidas <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => 'losses.store',
			'files' => true
		])
	!!}

		@include('losses.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop