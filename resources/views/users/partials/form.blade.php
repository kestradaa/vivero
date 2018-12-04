<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Nombre') !!}

			{!! Form::myInput('text', 'lastname', 'Apellido') !!}

			{!! Form::myInput('text', 'username', 'Usuario') !!}
	
			{!! Form::myInput('email', 'email', 'Correo') !!}
	
			{!! Form::myInput('password', 'password', 'Contraseña') !!}
	
			{!! Form::myInput('password', 'password_confirmation', 'Su contraseña de nuevo') !!}
		</div>  
	</div>
</div>