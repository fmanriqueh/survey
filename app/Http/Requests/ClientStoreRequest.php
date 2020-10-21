<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientStoreRequest extends FormRequest
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
            'name'          => [
                'required',
                'string',
                'between:1,150'
            ],
            'document_type' => [
                'required',
                'string',
                Rule::in([
                    'CEDULA DE CUIDADANIA',
                    'CEDULA DE EXTRANJERÍA',
                    'PASAPORTE'
                ])
            ],
            'document'      => [
                'required',
                'string',
                'regex:/^[0-9\s-]+$/'
            ],
            'temperature'   => [
                'required',
                'digits_between:0,100'
            ],
            'store'         => [
                'required',
                'string',
                Rule::in([
                    'STARA CALLE 12',
                    'STARA CALLE 11',
                    'STARA CALLE 10',
                    'STARA CALLE 8VA',
                    'STARA VENTURA',
                    'ZARETH VENTURA',
                    'STARA SINGAPUR',
                    'STARA VENAVER',
                    'STARA MEGACENTRO',
                    'STARA MAYORCA'
                ])
            ],
            'symptoms'       => [
                'required',
                'boolean'
            ]
        ];
    }
}
