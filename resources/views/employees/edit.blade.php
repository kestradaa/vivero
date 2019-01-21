@extends('admin.master')

@section('page-header')
	Personal <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($employee, [
			'route' => ['employees.update', $employee],
			'method' => 'put',
		])
	!!}

		@include('employees.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop

@section('js')
	@include('employees.partials.js')
@endsection