<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use App\Http\Requests\FormRequest;

class FormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'umur' => 'required',
            'tanggal' => 'required',
            'jenis_kelamin' => 'required'
        ];
    }
}