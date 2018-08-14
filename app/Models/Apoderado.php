<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Apoderado
 * @package App\Models
 * @version August 14, 2018, 3:06 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Candidato
 * @property \Illuminate\Database\Eloquent\Collection postulaciones
 * @property string nombreApo
 * @property string apPatApo
 * @property string apMatApo
 * @property integer fonoApo
 * @property string rutApo
 * @property string dvApo
 * @property string correoApo
 */
class Apoderado extends Model
{
  

    public $table = 'apoderados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombreApo',
        'apPatApo',
        'apMatApo',
        'fonoApo',
        'rutApo',
        'dvApo',
        'correoApo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idApoderado' => 'integer',
        'nombreApo' => 'string',
        'apPatApo' => 'string',
        'apMatApo' => 'string',
        'fonoApo' => 'integer',
        'rutApo' => 'string',
        'dvApo' => 'string',
        'correoApo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     
    public function candidatos()
    {
        return $this->hasMany(\App\Models\Candidato::class);
    }**/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function candidatos()
    {
        return $this->belongsToMany(\App\Models\Candidato::class, 'postulaciones');
    }
}
