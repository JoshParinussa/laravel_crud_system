<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sidi extends Model
{
    protected $table = 'sidis';

    protected $guarded = [];

    public function jemaats(){
        return $this->belongsTo(Jemaat::class, 'jemaat_id');
    }
}
