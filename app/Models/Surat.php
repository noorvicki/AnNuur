<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{

    protected $table = "surat";
    public function Quran(){
        return $this->belongsTo(Quran::class, 'id','suraId');
    }
}
