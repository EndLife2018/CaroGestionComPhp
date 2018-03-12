<?php

namespace App\Repositories;

use App\Models\Article;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticleRepository
 * @package App\Repositories
 * @version February 5, 2018, 7:36 pm UTC
 *
 * @method Article findWithoutFail($id, $columns = ['*'])
 * @method Article find($id, $columns = ['*'])
 * @method Article first($columns = ['*'])
*/
class ArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idfamillearticle',
        'idsousfamillearticle',
        'idfournisseur',
        'ref_fournisseur',
        'ref_interne',
        'desc_court',
        'desc_long',
        'date_debut',
        'date_fin',
        'num_serie',
        'poids',
        'duree_garantie',
        'stock_minima',
        'stock_reel',
        'code_barre',
        'prix_achat_ht',
        'prix_vente_ht',
        'prix_vente_ttc',
        'images',
        'images2',
        'images3'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }
}
