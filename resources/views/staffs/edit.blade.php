@extends('admin.master')

@section('page-header')
	Personal <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($staff, [
			'route' => ['staffs.update', $staff],
			'method' => 'put',
		])
	!!}

		@include('staffs.partials.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop

@section('js')
	@include('staffs.partials.js')
@endsection