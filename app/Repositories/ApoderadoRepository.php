<?php

namespace App\Repositories;

use App\Models\Apoderado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ApoderadoRepository
 * @package App\Repositories
 * @version August 14, 2018, 3:06 am UTC
 *
 * @method Apoderado findWithoutFail($id, $columns = ['*'])
 * @method Apoderado find($id, $columns = ['*'])
 * @method Apoderado first($columns = ['*'])
*/
class ApoderadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreApo',
        'apPatApo',
        'apMatApo',
        'fonoApo',
        'rutApo',
        'dvApo',
        'correoApo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Apoderado::class;
    }
}
