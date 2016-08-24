@extends('layouts.main')
@section('title', 'Form')
@section('header', 'Tambah Data')


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
	
	{!! Form::open(array('url' => '/form')) !!}
		<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
		    {!! Form::label('nama', 'Nama') !!}
		    {!! Form::text('nama', null, ['class' => 'form-control', 'required' => 'required'], old('nama')) !!}
		    <small class="text-danger">{{ $errors->first('nama') }}</small>
		</div>
		{{-- <input type="text" name="name" value="{{ old('nama') }} "> --}}
    	<div class="form-group{{ $errors->has('umur') ? ' has-error' : '' }}">
    	    {!! Form::label('umur', 'Umur') !!}
    	    {!! Form::text('umur', null, ['class' => 'form-control', 'required' => 'required']) !!}
    	    <small class="text-danger">{{ $errors->first('umur') }}</small>
    	</div>
    	<div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
    	    {!! Form::label('jenis_kelamin', 'Input label') !!}
    	    {!! Form::select('jenis_kelamin', array('L' => 'Laki-laki', 'P' => 'Perempuan'), 'L', ['id' => 'jenis_kelamin', 'class' => 'form-control', 'required' => 'required', 'multiple']) !!}
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