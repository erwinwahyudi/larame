<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\FormRequest;

class FormController extends Controller
{
	public function index(){
		$tugas = array('Mencuci piring',
    					'Memasak nasi',
    					'Membereskan tempat tidur'
    					);
		return view('form.index', array('tugas' => $tugas));
	}

	public function create(){
		return view('form.form');
	}

    public function store(FormRequest $request){
    	return 'data form sukses ditambah';
    }

    public function show($id){
    	$tugas = array('Mencuci piring',
    					'Memasak nasi',
    					'Membereskan tempat tidur'
    					);
    	return view('form.detail', array('tugas' => $tugas[$id]));
    }
}
