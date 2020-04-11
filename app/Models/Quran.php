<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    protected $table = "quran_id";

    public function Surat(){
        return $this->hasMany(Surat::class,'id','suraId');
    }
}
