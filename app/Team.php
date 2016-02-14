<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
	use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'namateam', 'kategori', 'instansi', 'alamatinstansi'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function user(){
        return $this->hasMany('App\User','idteam');
    }

    public function ketua(){
        return $this->hasMany('App\User','idteam')->where('code','!=','');
    }
}

