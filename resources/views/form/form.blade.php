<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	{{-- <form action="/dashboard" method="POST" role="form">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<legend>Form title</legend>

		<div class="form-group">
			<label for="usia">Usia</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="umur">
		</div>

		

		<button type="submit" class="btn btn-primary">Submit</button>
	</form> --}}
	
	{{-- @foreach ($errors->all() as $error)
		<p>{{ $error }}</p>
	@endforeach --}}
	
	{!! Form::open(array('url' => '/form')) !!}
    	{!! Form::label('umur', 'Usia Anda'); !!}
    	{!! Form::text('umur'); !!}
    	<p>{{ $errors->has('umur') ? $errors->first('umur') : '' }}</p>

    	{!! Form::label('tanggal', 'Tanggal Lahir'); !!}
    	{!! Form::date('tanggal'); !!}
    	<p> {{ $errors->has('tanggal') ? $errors->first('tanggal') : '' }} </p>

    	{!! Form::label('jenis_kelamin', 'Jenis Kelamin	'); !!}
    	{!! Form::select('jenis_kelamin', array('L' => 'Laki-laki', 'P' => 'Perempuan'), 'L'); !!}
    	{!! Form::submit('Kirim'); !!}
	{!! Form::close() !!}


</body>
</html>