<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatans';

    public function jemaats(){
        return $this->hasMany(Jemaat::class);
    }
}
