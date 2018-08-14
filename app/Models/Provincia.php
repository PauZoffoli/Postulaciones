<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Provincia
 * @package App\Models
 * @version August 14, 2018, 3:18 am UTC
 *
 * @property \App\Models\Regione regione
 * @property \Illuminate\Database\Eloquent\Collection Comuna
 * @property \Illuminate\Database\Eloquent\Collection postulaciones
 * @property string nombreProv
 * @property integer idRegion
 */
class Provincia extends Model
{
 
    public $table = 'provincias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombreProv',
        'idRegion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idProvincia' => 'integer',
        'nombreProv' => 'string',
        'idRegion' => 'integer'
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
    public function regione()
    {
        return $this->belongsTo(\App\Models\Regione::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comunas()
    {
        return $this->hasMany(\App\Models\Comuna::class);
    }
}
