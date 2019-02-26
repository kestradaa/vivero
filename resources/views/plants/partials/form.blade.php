<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Nombre de la Planta') !!}

			{!! Form::myInput('number', 'initial_quantity', 'Cantidad Inicial de la Planta') !!}

			{!! Form::myInput('number', 'actual_quantity', 'Cantidad actual de la Planta') !!}
			
			{!! Form::myInput('number', 'exit_quantity', 'Cantidad salida de la Planta') !!}

			{!! Form::myInput('number', 'goal', 'Meta Produccion de Planta') !!}
			
		</div>  
	</div>
</div>