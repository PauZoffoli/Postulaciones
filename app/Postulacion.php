<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $fillable = ['idApoderado','fechaPost','motivoPost','cursoPost','nombreFunc','nombreHerm','cursoHerm','prioridad','nombreEgre','rutEgre','dvRutEgre','AnoEgre','certificado'];
}
