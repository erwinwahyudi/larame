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
    	return 'data form sukses ditambah';
    }

    public function show($id){
    	$form = Form::find($id);
    	return view('form.detail', array('form' => $form));
    }
}
