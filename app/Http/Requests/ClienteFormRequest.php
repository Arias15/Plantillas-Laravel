<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'cod_cliente'=> 'required | max: 100',
            'raz_social'=> 'required | max: 100' ,
            'segmento'=> 'required | max: 100',
            'sub_seg'=> 'required | max: 100',
            'canal'=> 'required | max: 100',
            'region'=> 'required | max: 100',
            'departamento'=> 'required | max: 100',
            'provincia'=> 'required | max: 100',
            'ejec_comercial'=> 'required | max: 100',
            'jefe_comercial'=> 'required | max: 100',
            'fac_agrupada'=> 'required | max: 2',
            'tipo_cliente'=> 'required | max: 100'
        ];
    }
}
