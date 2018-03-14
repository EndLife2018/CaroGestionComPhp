<?php

namespace App\Repositories;

use App\Models\Fournisseur;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FournisseurRepository
 * @package App\Repositories
 * @version March 13, 2018, 9:20 am UTC
 *
 * @method Fournisseur findWithoutFail($id, $columns = ['*'])
 * @method Fournisseur find($id, $columns = ['*'])
 * @method Fournisseur first($columns = ['*'])
*/
class FournisseurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'raison_social',
        'num_siret',
        'num_tva',
        'civilite',
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
        'encour'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fournisseur::class;
    }
}
