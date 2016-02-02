<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semnas extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'notelp', 'email', 'kategori','status',
    ];

    protected $dates = [
        'deleted_at',
    ];
}
