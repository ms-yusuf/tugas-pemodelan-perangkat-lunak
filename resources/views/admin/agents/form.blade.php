<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Nama') !!}
		
			{!! Form::myInput('email', 'email', 'Email') !!}
	
			{!! Form::myInput('password', 'password', 'Password') !!}

      {!! Form::myInput('text', 'telp', 'Telp') !!}

      {!! Form::myInput('text', 'tanggal_lahir', 'Tanggal Lahir') !!}

      {!! Form::mySelect('jenis_kelamin', 'Jenis Kelamin', array(0 => 'Perempuan', 1 => 'Laki - laki'), null, ['class' => 'form-control select2']) !!}

			{!! Form::myTextArea('alamat_lengkap', 'Alamat Lengkap') !!}
		</div>  
	</div>
</div>