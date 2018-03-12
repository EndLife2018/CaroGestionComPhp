<?php

namespace App\Repositories;

use App\Models\CommandeClient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommandeClientRepository
 * @package App\Repositories
 * @version February 5, 2018, 7:36 pm UTC
 *
 * @method CommandeClient findWithoutFail($id, $columns = ['*'])
 * @method CommandeClient find($id, $columns = ['*'])
 * @method CommandeClient first($columns = ['*'])
*/
class CommandeClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idclient',
        'date',
        'etat_cmd_cli',
        'date_liv_cmd_cli',
        'art1',
        'qte1',
        'art2',
        'qte2',
        'art3',
        'qte3',
        'art4',
        'qte4',
        'art5',
        'qte5',
        'art6',
        'qte6',
        'art7',
        'qte7',
        'art8',
        'qte8',
        'art9',
        'qte9',
        'art10',
        'qte10',
        'art11',
        'qte11',
        'art12',
        'qte12',
        'ptht_cmd_cli',
        'taxe_cmd_cli',
        'ptttc_cmd_cli'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CommandeClient::class;
    }
}
