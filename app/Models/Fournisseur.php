<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fournisseur
 * @package App\Models
 * @version March 13, 2018, 9:20 am UTC
 *
 * @property string raison_social
 * @property string num_siret
 * @property string num_tva
 * @property integer civilite
 * @property string adresse1
 * @property string adresse2
 * @property integer cp
 * @property string ville
 * @property string tel
 * @property string fax
 * @property string port
 * @property string mail
 * @property integer mode_paiement_default
 * @property string code_banque
 * @property string code_guichet
 * @property string code_cpt
 * @property string cle_rib
 * @property string iban
 * @property string bic
 * @property string encour
 */
class Fournisseur extends Model
{

    public $table = 'fournisseur';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idfournisseur' => 'integer',
        'raison_social' => 'string',
        'num_siret' => 'string',
        'num_tva' => 'string',
        'civilite' => 'integer',
        'adresse1' => 'string',
        'adresse2' => 'string',
        'cp' => 'integer',
        'ville' => 'string',
        'tel' => 'string',
        'fax' => 'string',
        'port' => 'string',
        'mail' => 'string',
        'mode_paiement_default' => 'integer',
        'code_banque' => 'string',
        'code_guichet' => 'string',
        'code_cpt' => 'string',
        'cle_rib' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'encour' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
