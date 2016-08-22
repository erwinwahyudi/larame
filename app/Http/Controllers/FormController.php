<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\FormRequest;
use App\Form;

class FormController extends Controller
{
	public function index(){
		$form = Form::All();
		return view('form.index', array('form' => $form));
	}

	public function create(){
		return view('form.form');
	}

    public function store(FormRequest $request){
    	$umur = $request->input('umur');
    	$tanggal = $request->input('tanggal');
    	$jenis_kelamin = $request->input('jenis_kelamin');
    	dd($umur, $tanggal, $jenis_kelamin);

    }

    public function show($id){
    	$form = Form::find($id);
    	return view('form.detail', array('form' => $form));
    }
}
