<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Nombre de la Planta') !!}

			{!! Form::myInput('number', 'initial_quantity', 'Cantidad Inicial de la Planta') !!}
			
			{!! Form::myInput('number', 'propagation_quantity', 'Cantidad Propagada de la Planta') !!}

			{!! Form::myInput('number', 'exit_quantity', 'Cantidad Salida de la Planta') !!}

			{!! Form::myInput('number', 'actual_quantity', 'Cantidad Actual de la Planta') !!}

			{!! Form::myInput('number', 'goal', 'Meta Produccion de Planta') !!}

			<h3>Lista de Procesos</h3>
			<div class="form-group">
				<ul class="list-unstyled">
					@foreach ($processes as $process)
							{!! Form::myInput('number', 'processes[]',$process->name,['placeholder' => $process->description]) !!}
							<hr>
					@endforeach
				</ul>
			</div>
		</div>  
	</div>
</div>