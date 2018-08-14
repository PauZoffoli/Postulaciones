<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoderado extends Model
{
    protected $fillable = ['nombreApo','apPatApo','apMatApo','fonoApo','idComuna','rutApo','dvApo','correoApo'];
}
