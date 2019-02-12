@extends('admin.master')

@section('page-header')
	Roles <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($role, [
			'route' => ['roles.update', $role],
			'method' => 'put',
			'files' => true,
		])
	!!}

		@include('roles.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop

@section('js')

@section('js')
	@include('roles.partials.js')
@endsection