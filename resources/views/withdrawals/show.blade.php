@extends('admin.master')

@section('page-header')
	Retiro <small>ver</small>
@stop

@section('content')
	{!! Form::model($withdrawal, [
            'id' => 'main-form'
		])
	!!}

		@include('withdrawals.partials.form')

        @include('admin.partials.back')
        
	{!! Form::close() !!}
	
@stop