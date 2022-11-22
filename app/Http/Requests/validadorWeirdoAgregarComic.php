<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorWeirdoAgregarComic extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
              // agregarComic
              'txtNOMBRE' => 'required',
              'txtEDICION' => 'required',
              'txtCOMPAÑIA' => 'required',
              'txtCANTIDAD' => 'required|numeric',
              'txtPRECIOCOMPRA' => 'required|numeric',
              'txtFECHAINGRESO'=> 'required',
              'txtPROVEEDOR'=>'required'
        ];
    }
}
