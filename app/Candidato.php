<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = ['idApoderado','nombreCand','apPatCand','apNatCand','rutCand','dvCand','parentesco','region','provincia','comuna','calleCand','numero','dpto'];
}
