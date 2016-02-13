<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
     */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'Kolom konfirmasi :attribute tidak sama.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => 'Penulisan :attribute anda salah.',
    'exists'               => 'The selected :attribute is invalid.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'lebih dari :max karakter.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'Kolom :attribute minimal :min angka.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'Kolom :attribute minimal :min karakter.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'Kolom :attribute harus diisi.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Kolom :attribute harus diisi.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ':attribute sudah digunakan.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
     */

    'custom'               => [
        'anggota.0.email'  => [
            'required_with' => 'Email anggota pertama harus diisi.',
            'email'         => 'Format email salah.',
            'unique'        => 'Email sudah digunakan.',
            'max'           => 'Maksimal 60 karakter.',
        ],
        'anggota.1.email'  => [
            'required_with' => 'Email anggota kedua harus diisi.',
            'email'         => 'Format email salah.',
            'unique'        => 'Email sudah digunakan.',
            'max'           => 'Maksimal 60 karakter.',
        ],
        'anggota.2.email'  => [
            'required_with' => 'Email anggota ketiga harus diisi.',
            'email'         => 'Format email salah.',
            'unique'        => 'Email sudah digunakan.',
            'max'           => 'Maksimal 60 karakter.',
        ],
        'anggota.0.notelp' => [
            'required_with' => 'Nomer handphone anggota pertama harus diisi.',
            'max'           => 'Maksimal 12 angka.',
        ],
        'anggota.1.notelp' => [
            'required_with' => 'Nomer handphone anggota kedua harus diisi.',
            'max'           => 'Maksimal 12 angka.',
        ],
        'anggota.2.notelp' => [
            'required_with' => 'Nomer handphone anggota ketiga harus diisi.',
            'max'           => 'Maksimal 12 angka.',
        ],
        'anggota.0.nama'   => [
            'max' => 'Maksimal 60 karaker.',
        ],
        'anggota.1.nama'   => [
            'max' => 'Maksimal 60 karaker.',
        ],
        'anggota.2.nama'   => [
            'max' => 'Maksimal 60 karaker.',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
     */

    'attributes'           => [
        'namaketua'        => 'Nama Ketua',
        'emailketua'       => 'Email Ketua',
        'notelp'           => 'Nomer Handphone',
        'namateam'         => 'Nama Tim',
        'instansi'         => 'Instansi',
        'alamatinstansi'   => 'Alamat Instansi',
        'email'            => 'Email',
        'notelpsemnas'     => 'No Handphone',
        'alamatinstansi'   => 'Alamat Instansi',
    ],

];
