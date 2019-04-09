@extends('admin.master')

@section('css')

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

@endsection

@section('content')

    <div class="container">
    	<h2>INDICADORES</h2>
    	<hr>

        <div class="row">
        	<div class="col-md-6">
        		<h4>Grafica de Linea</h4>
        	</div>
        	<div class="col-md-6">
        		<h4>Grafica de Area</h4>
        	</div>
        </div>
    </div>

@endsection

@section('js')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

@endsection