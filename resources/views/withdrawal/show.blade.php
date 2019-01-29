@extends('admin.master')

@section('page-header')
	Perdida <small>ver</small>
@stop

@section('content')
	{!! Form::model($whitdrawal, [
            'id' => 'main-form'
		])
	!!}

		@include('whitdrawals.partials.form')
		
        @include('admin.partials.back')
        
	{!! Form::close() !!}
	
@stop