@extends('admin.master')

@section('page-header')
	Planta <small>ver</small>
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

@section('js')
	@include('admin.partials.disable')
@endsection