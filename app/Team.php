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
        return $this->hasMany('App\User','idteam','id')
            ->orderBy('code', 'desc');
    }

    public function ketua(){
        return $this->hasOne('App\User','idteam','id')
            ->where('code','!=','');
    }

    public function file(){
        return $this->hasMany('App\File','idteam','id');
    }
}

