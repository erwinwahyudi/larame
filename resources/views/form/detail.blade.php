@extends('layouts.main')
@section('title', 'Form')
@section('header', 'Detail Form')


@section('konten')
	<h4> {{ $form->nama }} </h4>
	<p>{{ $form->umur }} </p>
	<p>{{ $form->jenis_kelamin }} </p>
	<a href="{{ URL::to('form/edit/'.$form->id) }}" > Edit </a>
	
	{!! Form::open(array('url' => '/form/hapus/'.$form->id, 'method' => 'delete')) !!}
			<div class="form-group">
				<div class="col-sm-10 col-offset-2">
					<button type="submit" class="btn btn-primary" name="nama" value="delete">Delete</button>
				</div>
			</div>
	{!! Form::close() !!}
@stop