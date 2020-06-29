<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JemaatPernikahan extends Model
{
    protected $table = 'pernikahans';

    protected $guarded = [];

    public function suami(){
        return $this->belongsTo(Jemaat::class, 'suami_jemaat_id');
    }

    public function istri(){
        return $this->belongsTo(Jemaat::class, 'istri_jemaat_id');
    }

    public function pendeta(){
        return $this->belongsTo(Jemaat::class, 'pendeta_jemaat_id');
    }
}
