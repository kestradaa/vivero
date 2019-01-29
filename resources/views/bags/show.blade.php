@extends('admin.master')

@section('page-header')
	Bolsas <small>ver</small>
@stop

@section('content')
	{!! Form::model($bag, [
            'id' => 'main-form'
		])
	!!}

		@include('bags.partials.form')
		
        @include('admin.partials.back')
        
	{!! Form::close() !!}
	
@stop