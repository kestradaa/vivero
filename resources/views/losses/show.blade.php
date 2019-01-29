@extends('admin.master')

@section('page-header')
	Perdidas <small>ver</small>
@stop

@section('content')
	{!! Form::model($loss, [
            'id' => 'main-form'
		])
	!!}

		@include('losses.partials.form')
		
        @include('admin.partials.back')
        
	{!! Form::close() !!}
	
@stop