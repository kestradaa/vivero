@extends('admin.master')

@section('page-header')
	Bolsas <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($bag, [
			'route' => ['bags.update', $bag],
			'method' => 'put',
		])
	!!}

		@include('bags.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop