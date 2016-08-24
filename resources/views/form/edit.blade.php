@extends('layouts.main')
@section('title', 'Form Edit')
@section('header', 'Update Data')


@section('konten')

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
	
	{!! Form::open(array('url' => '/form/update/'.$form->id, 'method' => 'post')) !!}
		<input type="hidden" name="_method" value="put">
		<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
		    {!! Form::label('nama', 'Nama') !!}
		    <input type="text" name="nama" id="input" class="form-control" value="{{ $form->nama }}" required="required" title="">
		    <small class="text-danger">{{ $errors->first('nama') }}</small>
		</div>
		<div class="form-group{{ $errors->has('umur') ? ' has-error' : '' }}">
    	    {!! Form::label('umur', 'Umur') !!}
    	    <input type="number" name="umur" id="inputUmur" class="form-control" value="{{ $form->umur }}" max="" step="" required="required" title="">
    	    <small class="text-danger">{{ $errors->first('umur') }}</small>
    	</div>
    	<div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
    	    {!! Form::label('jenis_kelamin', 'Input label') !!}
    	    <select name="jenis_kelamin" id="inputJenis_kelamin" class="form-control" required="required">
    	    	<option value="Laki-laki">Laki-laki</option>
    	    	<option value="Perempuan">Perempuan</option>
    	    </select>
    	    <small class="text-danger">{{ $errors->first('jenis_kelamin') }}</small>
    	</div>

    	{{-- {!! Form::label('tanggal', 'Tanggal Lahir'); !!}
    	{!! Form::date('tanggal'); !!}
    	<p> {{ $errors->has('tanggal') ? $errors->first('tanggal') : '' }} </p> --}}

    	{{-- {!! Form::label('jenis_kelamin', 'Jenis Kelamin	'); !!}
    	{!! Form::select('jenis_kelamin', array('L' => 'Laki-laki', 'P' => 'Perempuan'), 'L'); !!} --}}
    	{!! Form::submit('Kirim'); !!}
	{!! Form::close() !!}


@stop