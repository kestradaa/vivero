@extends('admin.master')

@section('page-header')
	Personal <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => 'staffs.store',
			'files' => true
		])
	!!}

		@include('staffs.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop

@section('js')
	@include('staffs.partials.js')
@endsection