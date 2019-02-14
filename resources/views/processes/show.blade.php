@extends('admin.master')

@section('page-header')
	Procesos <small>ver</small>
@stop

@section('content')
	{!! Form::model($process, [
            'id' => 'main-form'
		])
	!!}

		@include('processes.partials.form')
		
        @include('admin.partials.back')
        
	{!! Form::close() !!}
	
@stop