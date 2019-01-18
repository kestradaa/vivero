@extends('admin.master')

@section('page-header')
	Planta <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($plant, [
			'route' => ['plants.update', $plant],
			'method' => 'put',
		])
	!!}

		@include('plants.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop

@section('js')
	@include('plants.partials.js')
@endsection