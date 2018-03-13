<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 * @package App\Models
 * @version February 5, 2018, 7:36 pm UTC
 *
 * @property integer iduser
 * @property string raison_social
 * @property string num_siret
 * @property string num_tva
 * @property string nom
 * @property string prenom
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
 * @property string mail_paypal
 */
class Client extends Model
{
    //use SoftDeletes;

    public $table = 'client';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'raison_social',
        'num_siret',
        'num_tva',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idclient' => 'integer',
        'iduser' => 'integer',
        'raison_social' => 'string',
        'num_siret' => 'string',
        'num_tva' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
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
        'encour' => 'string',
        'mail_paypal' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
