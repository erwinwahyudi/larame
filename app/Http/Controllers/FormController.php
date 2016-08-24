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
		// return view('form.index')->with('form', $form);
		return view('form.index', compact('form'));
	}

	public function create(){
		return view('form.form');
	}

    public function store(FormRequest $request){

        // Form::create($request->all()); //fungsi untuk insert post ke database hanya 1 baris
    	$umur = $request->input('umur');
    	$nama = $request->input('nama');
    	$jk = $request->input('jenis_kelamin');
    	if ($request->input('umur') == 'abc') {
			$request->flashOnly('nama');
			return redirect()->back()->with('message', 'data umur salah');
		} 
    	Form::create([ 	//Form:: untuk mengakses model form
    			'nama' => $nama,
    			'umur' => $umur,
    			'jenis_kelamin' => $jk
    		]);
    	return redirect('form')->with('message', 'Data berhasil  ditambahkan');

    }

    public function show($id){
    	$form = Form::findOrFail($id);
    	return view('form.detail', array('form' => $form));
    }

    public function edit($id){
        $form = Form::findOrFail($id);
        return view('form.edit', compact('form'));
    }

    public function update(FormRequest $request, $id){
        $form = Form::findOrFail($id);
        $form->update($request->all());
       return redirect('form/show/'.$id)->with('message', 'Data sukses diupdate'); //untuk return k id yg diuptae
       //atau bisa juga dengan cara ini untuk update data
        // $umur = $request->input('umur');
        // $nama = $request->input('nama');
        // $jk = $request->input('jenis_kelamin');
        // Form::where('id', $id)->update([  //Form:: untuk mengakses model form
        //         'nama' => $nama,
        //         'umur' => $umur,
        //         'jenis_kelamin' => $jk
        //     ]);
        // return redirect('form/show/'.$id); //untuk return k id yg diuptae
    }

    public function delete($id){
        $form = Form::findOrFail($id);
        $form->delete();
        return redirect('/form')->with('message', 'Data terhapus');
    }
}
