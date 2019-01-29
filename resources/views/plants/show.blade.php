@extends('admin.master')

@section('page-header')
	Plantas <small>ver</small>
@stop

@section('content')
	{!! Form::model($plant, [
            'id' => 'main-form'
		])
	!!}

		@include('plants.partials.form')
		
        @include('admin.partials.back')
        
	{!! Form::close() !!}
	
@stop