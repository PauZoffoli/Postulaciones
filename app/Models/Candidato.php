<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Candidato
 * @package App\Models
 * @version August 14, 2018, 3:13 am UTC
 *
 * @property \App\Models\Apoderado apoderado
 * @property \Illuminate\Database\Eloquent\Collection postulaciones
 * @property integer idApoderado
 * @property string nombreCand
 * @property string apPatCand
 * @property string apNatCand
 * @property string rutCand
 * @property string dvCand
 * @property string parentesco
 * @property string region
 * @property string provincia
 * @property string comuna
 * @property string calleCand
 * @property integer numero
 * @property integer dpto
 */
class Candidato extends Model
{
    

    public $table = 'candidatos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'idApoderado',
        'nombreCand',
        'apPatCand',
        'apNatCand',
        'rutCand',
        'dvCand',
        'parentesco',
        'region',
        'provincia',
        'comuna',
        'calleCand',
        'numero',
        'dpto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idCandidato' => 'integer',
        'idApoderado' => 'integer',
        'nombreCand' => 'string',
        'apPatCand' => 'string',
        'apNatCand' => 'string',
        'rutCand' => 'string',
        'dvCand' => 'string',
        'parentesco' => 'string',
        'region' => 'string',
        'provincia' => 'string',
        'comuna' => 'string',
        'calleCand' => 'string',
        'numero' => 'integer',
        'dpto' => 'integer'
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function apoderados()
    {
        return $this->belongsToMany(\App\Models\Apoderado::class, 'postulaciones');
    }
}
