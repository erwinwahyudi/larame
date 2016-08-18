<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TugasController extends Controller
{
    public function getTugas(){
    	$tugas = array('Mencuci piring',
    					'Memasak nasi',
    					'Membereskan tempat tidur'
    					);
    	$output = '<h1>Data tugas</h1>';
    	$output .= '<ul>';
    	foreach ($tugas as $key => $data) {
    		$output.= '<li><a href="/tugas/'.$key.'">'.$data.'</a></li>';
    	}
    	$output .= '</ul>';
    	return $output;
    }

    public function getDetail($id){
    	$tugas = array('Mencuci piring',
    					'Memasak nasi',
    					'Membereskan tempat tidur'
    					);
    	return $tugas[$id];
    }
}
