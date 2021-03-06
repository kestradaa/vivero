@extends('admin.master')

@section('page-header')
	Bolsas <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => 'bags.store',
			'files' => true
		])
	!!}

		@include('bags.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop