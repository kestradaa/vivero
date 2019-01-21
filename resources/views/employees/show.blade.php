@extends('admin.master')

@section('page-header')
	Personal <small>ver</small>
@stop

@section('content')
	{!! Form::model($employee, [
            'id' => 'main-form'
		])
	!!}

		@include('employees.partials.form')
		
        @include('admin.partials.back')
        
	{!! Form::close() !!}
	
@stop

@section('js')
	@include('admin.partials.disable')
@endsection