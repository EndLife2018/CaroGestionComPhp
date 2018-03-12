<?php

namespace App\Repositories;

use App\Models\CommandeFournisseur;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CommandeFournisseurRepository
 * @package App\Repositories
 * @version February 5, 2018, 7:37 pm UTC
 *
 * @method CommandeFournisseur findWithoutFail($id, $columns = ['*'])
 * @method CommandeFournisseur find($id, $columns = ['*'])
 * @method CommandeFournisseur first($columns = ['*'])
*/
class CommandeFournisseurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idfournisseur',
        'date_cmd_four',
        'etat_cmd_four',
        'date_livraison_cmd_four',
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
        'pvht1',
        'pvht2',
        'pvht3',
        'pvht4',
        'pvht5',
        'pvht6',
        'pvht7',
        'pvht8',
        'pvht9',
        'pvht10',
        'pvht11',
        'pvht12',
        'port',
        'remise',
        'eco-part',
        'ptht_cmd_four',
        'taxe_cmd_four',
        'ptttc_cmd_four'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CommandeFournisseur::class;
    }
}
