@extends('layouts.main')
@section('title', 'Form')
@section('header', 'Halaman Isi Form')


@section('konten')
	
	<ul>
	@foreach ($form as $data)
		<li> <a href="{{URL::to('/form/show/'.$data->id)}}">{{ $data->nama }}</li>
	@endforeach
	</ul>
@stop

