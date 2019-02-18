<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			
			{!! Form::myInput('number', 'receipt', 'NO. de vale') !!}

			{!! Form::datePicker('withdrawal_date', 'Fecha de retiro', ['id' => 'whithdrawal_date']) !!}

			{!! Form::myInput('text', 'withdrawal_person', 'Persona que retira') !!}

			{!! Form::myTextArea('description', 'Descripción') !!}

			{!! Form::myInput('text', 'lisence_plate', 'Placa de vehiculo que retira') !!}

			<div class="form-group">		   
		    	{!! Form::label('file', 'Imagen') !!}
		    	{!! Form::file('file') !!}
		    </div>
		</div>
	</div>
</div>