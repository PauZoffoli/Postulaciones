<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Region
 * @package App\Models
 * @version August 14, 2018, 3:18 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection postulaciones
 * @property \Illuminate\Database\Eloquent\Collection Provincia
 * @property string nombreReg
 * @property string regionOrd
 */
class Region extends Model
{

    public $table = 'regiones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombreReg',
        'regionOrd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idRegion' => 'integer',
        'nombreReg' => 'string',
        'regionOrd' => 'string'
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
     **/
    public function provincias()
    {
        return $this->hasMany(\App\Models\Provincia::class);
    }
}
