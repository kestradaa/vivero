@extends('admin.master')

@section('page-header')
	Personal <small>ver</small>
@stop

@section('content')
	{!! Form::model($staff, [
            'id' => 'main-form'
		])
	!!}

		@include('staffs.partials.form')
		
        @include('admin.partials.back')
        
	{!! Form::close() !!}
	
@stop

@section('js')
	@include('admin.partials.disable')
@endsection