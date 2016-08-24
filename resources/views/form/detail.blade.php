@extends('layouts.main')
@section('title', 'Form')
@section('header', 'Detail Form')


@section('konten')
	<h4>Nama : {{ $form->nama }} </h4>
	<p> Umur : {{ $form->umur }} </p>
	<p> Jenis Kelamin : {{ $form->jenis_kelamin }} </p>
	
	
	{!! Form::open(array('url' => '/form/hapus/'.$form->id, 'method' => 'delete')) !!}
			<div class="form-group">
				<div class="col-sm-10 col-offset-2">
					<button type="button" class="btn btn-default"><a href="{{ URL::to('form/edit/'.$form->id) }}" > Edit </a></button>
				
					<button type="submit" class="btn btn-primary" name="nama" value="delete">Delete</button>
				</div>
			</div>
	{!! Form::close() !!}
@stop