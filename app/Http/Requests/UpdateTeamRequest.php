<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateTeamRequest extends Request
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
            'namateam'       => 'required|max:60',
            'kategori'       => 'required',
            'instansi'       => 'required|max:60',
            'alamatinstansi' => 'required|max:60',
        ];
    }
}
