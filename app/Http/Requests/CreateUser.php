<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUser extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'namaketua'              => 'required|max:60',
            'emailketua'             => 'required|email|max:60|unique:users',
            'notelp'                 => 'required|max:14|unique:users',
            'password'               => 'required|confirmed|min:6',
            'password_confirmation ' => 'required|min:6',
            'kategori'               => 'required',
            'namatim'                => 'required|max:60|unique:teams',
            'institusi'              => 'required|max:60',
            'anggota.*.nama'         => 'max:60',
            'anggota.*.email'        => 'email|max:60|unique:users|required_with:anggota.*.nama',
            'anggota.*.notelp'       => 'max:14|unique:users|required_with:anggota.*.nama,anggota.*.email',
        ];
    }
}
