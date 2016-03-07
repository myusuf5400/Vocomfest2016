<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateAnggotaRequest extends Request
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
            'nama'   => 'required|max:60',
            'notelp' => 'required|max:12',
            'email'  => 'required|email|max:60',
        ];
    }
}
