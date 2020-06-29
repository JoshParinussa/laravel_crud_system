<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pernikahan extends Model
{
    protected $table = 'pernikahans';

    protected $guarded = [];

    public function jemaat()
    {
    	return $this->belongsToMany(Jemaat::class);
    }
}
