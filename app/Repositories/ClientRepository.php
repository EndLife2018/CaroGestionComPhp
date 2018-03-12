<?php

namespace App\Repositories;

use App\Models\Client;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClientRepository
 * @package App\Repositories
 * @version February 5, 2018, 7:36 pm UTC
 *
 * @method Client findWithoutFail($id, $columns = ['*'])
 * @method Client find($id, $columns = ['*'])
 * @method Client first($columns = ['*'])
*/
class ClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'iduser',
        'raison_social',
        'num_siret',
        'num_tva',
        'civilite',
        'nom',
        'prenom',
        'adresse1',
        'adresse2',
        'cp',
        'ville',
        'tel',
        'fax',
        'port',
        'mail',
        'mode_paiement_default',
        'code_banque',
        'code_guichet',
        'code_cpt',
        'cle_rib',
        'iban',
        'bic',
        'encour',
        'mail_paypal'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Client::class;
    }
}
