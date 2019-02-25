<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Nombre de la Planta') !!}

			{!! Form::myInput('number', 'initial_quantity', 'Cantidad Inicial de la Planta') !!}

			{!! Form::myInput('number', 'actual_quantity', 'Cantidad actual de la Planta') !!}
			
			{!! Form::myInput('number', 'exit_quantity', 'Cantidad salida de la Planta') !!}

			{!! Form::myInput('number', 'goal', 'Meta Produccion de Planta') !!}

			{{--<h3>Lista de Procesos</h3>
			<div class="form-group">
				<ul class="list-unstyled">
					@foreach ($processes as $process)
						<li>
							{!! Form::myCheckbox('processes[]', 'process'.$process->id, $process->name, $process->id, null) !!}
							<em>({{ $process->description ?? 'Sin descripción' }})</em>
							<hr>
						</li>
					@endforeach
				</ul>
			</div>

		</div>  
	</div>
</div>