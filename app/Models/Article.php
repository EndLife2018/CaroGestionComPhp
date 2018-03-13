<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Models
 * @version February 5, 2018, 7:36 pm UTC
 *
 * @property integer idfamillearticle
 * @property integer idsousfamillearticle
 * @property integer idfournisseur
 * @property string ref_fournisseur
 * @property string ref_interne
 * @property string desc_court
 * @property string desc_long
 * @property string date_debut
 * @property string date_fin
 * @property string num_serie
 * @property string poids
 * @property string duree_garantie
 * @property string stock_minima
 * @property string stock_reel
 * @property string code_barre
 * @property string prix_achat_ht
 * @property string prix_vente_ht
 * @property string prix_vente_ttc
 * @property string images
 * @property string images2
 * @property string images3
 */
class Article extends Model
{
    //use SoftDeletes;

    public $table = 'article';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'idfournisseur',
        'ref_interne',
        'desc_long',
        'num_serie',
        'poids',
        'duree_garantie',
        'stock_minima',
        'code_barre',
        'prix_vente_ht',
        'prix_vente_ttc'
        ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'idarticle' => 'integer',
        // 'idfamillearticle' => 'integer',
        // 'idsousfamillearticle' => 'integer',
         'idfournisseur' => 'integer',
        // 'ref_fournisseur' => 'string',
        'ref_interne' => 'string',
        'desc_long' => 'string',
        'num_serie' => 'string',
        'poids' => 'string',
        'duree_garantie' => 'string',
        'stock_minima' => 'string',
        'code_barre' => 'string',
        'prix_vente_ht' => 'string',
        'prix_vente_ttc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
