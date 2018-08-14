<?php

namespace App\Repositories;

use App\Models\Postulacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PostulacionRepository
 * @package App\Repositories
 * @version August 14, 2018, 3:18 am UTC
 *
 * @method Postulacion findWithoutFail($id, $columns = ['*'])
 * @method Postulacion find($id, $columns = ['*'])
 * @method Postulacion first($columns = ['*'])
*/
class PostulacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Postulacion::class;
    }
}
