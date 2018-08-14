<?php

namespace App\Repositories;

use App\Models\Candidato;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CandidatoRepository
 * @package App\Repositories
 * @version August 14, 2018, 3:13 am UTC
 *
 * @method Candidato findWithoutFail($id, $columns = ['*'])
 * @method Candidato find($id, $columns = ['*'])
 * @method Candidato first($columns = ['*'])
*/
class CandidatoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Candidato::class;
    }
}
