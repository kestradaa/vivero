<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			
			{!! Form::myInput('number', 'receipt', 'NO. de vale') !!}

			{!! Form::datePicker('Fecha que se realiza', 'withdrawal_date') !!}

			{!! Form::myInput('text', 'withdrawal_person', 'Persona que retira') !!}

			{!! Form::myTextArea('description', 'Descripción') !!}

			{!! Form::myInput('text', 'lisence_plate', 'Placa de vehiculo que retira') !!}

		</div>  
	</div>
</div>