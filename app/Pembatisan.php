<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembatisan extends Model
{
    protected $table = 'pernikahans';

    public function jemaat()
    {
    	return $this->belongsTo(Jemaat::class);
    }
}
