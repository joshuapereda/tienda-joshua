<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    //RELACIOANR
    protected $with = ['Documento']; //WITH = TRAER
    public function Documento()
    {
        return $this->belongsTo(Documento::class);
    }
}
