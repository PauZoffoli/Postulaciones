<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Postulacion
 * @package App\Models
 * @version August 14, 2018, 3:18 am UTC
 *
 * @property \App\Models\Apoderado apoderado
 * @property \App\Models\Candidato candidato
 * @property integer idCandidato
 * @property integer idApoderado
 * @property date fechaPost
 * @property string motivoPost
 * @property string cursoPost
 * @property string nombreFunc
 * @property string nombreHerm
 * @property string cursoHerm
 * @property integer prioridad
 * @property string nombreEgre
 * @property string rutEgre
 * @property string dvRutEgre
 * @property integer AnoEgre
 * @property boolean certificado
 */
class Postulacion extends Model
{
    

    public $table = 'postulaciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idCandidato',
        'idApoderado',
        'fechaPost',
        'motivoPost',
        'cursoPost',
        'nombreFunc',
        'nombreHerm',
        'cursoHerm',
        'prioridad',
        'nombreEgre',
        'rutEgre',
        'dvRutEgre',
        'AnoEgre',
        'certificado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idPostulacion' => 'integer',
        'idCandidato' => 'integer',
        'idApoderado' => 'integer',
        'fechaPost' => 'date',
        'motivoPost' => 'string',
        'cursoPost' => 'string',
        'nombreFunc' => 'string',
        'nombreHerm' => 'string',
        'cursoHerm' => 'string',
        'prioridad' => 'integer',
        'nombreEgre' => 'string',
        'rutEgre' => 'string',
        'dvRutEgre' => 'string',
        'AnoEgre' => 'integer',
        'certificado' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function apoderado()
    {
        return $this->belongsTo(\App\Models\Apoderado::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function candidato()
    {
        return $this->belongsTo(\App\Models\Candidato::class);
    }
}
