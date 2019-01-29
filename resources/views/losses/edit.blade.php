@extends('admin.master')

@section('page-header')
	Perdidas <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($loss, [
			'route' => ['losses.update', $loss],
			'method' => 'put',
		])
	!!}

		@include('losses.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop