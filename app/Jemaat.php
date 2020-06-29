<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    protected $table = 'jemaats';

    protected $guarded = [];

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

    public function sidi(){
        return $this->hasOne(Sidi::class);
    }

    public function pernikahan()
    {
    	return $this->belongsToMany(Pernikahan::class);
    }

    public function pembatisan()
    {
    	return $this->hasMany(Pembatisan::class);
    }
}
