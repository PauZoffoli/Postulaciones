<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class Comuna
 * @package App\Models
 * @version August 14, 2018, 3:17 am UTC
 *
 * @property \App\Models\Provincia provincia
 * @property \Illuminate\Database\Eloquent\Collection postulaciones
 * @property string nombreComu
 * @property integer idProvincia
 */
class Comuna extends Model
{
   

    public $table = 'comunas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombreComu',
        'idProvincia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idComuna' => 'integer',
        'nombreComu' => 'string',
        'idProvincia' => 'integer'
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
    public function provincia()
    {
        return $this->belongsTo(\App\Models\Provincia::class);
    }
}
