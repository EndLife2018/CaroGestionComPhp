<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CommandeFournisseur
 * @package App\Models
 * @version February 5, 2018, 7:37 pm UTC
 *
 * @property integer idfournisseur
 * @property string date_cmd_four
 * @property integer etat_cmd_four
 * @property string date_livraison_cmd_four
 * @property string art1
 * @property string qte1
 * @property string art2
 * @property string qte2
 * @property string art3
 * @property string qte3
 * @property string art4
 * @property string qte4
 * @property string art5
 * @property string qte5
 * @property string art6
 * @property string qte6
 * @property string art7
 * @property string qte7
 * @property string art8
 * @property string qte8
 * @property string art9
 * @property string qte9
 * @property string art10
 * @property string qte10
 * @property string art11
 * @property string qte11
 * @property string art12
 * @property string qte12
 * @property decimal pvht1
 * @property decimal pvht2
 * @property decimal pvht3
 * @property decimal pvht4
 * @property decimal pvht5
 * @property decimal pvht6
 * @property decimal pvht7
 * @property decimal pvht8
 * @property decimal pvht9
 * @property decimal pvht10
 * @property decimal pvht11
 * @property decimal pvht12
 * @property decimal port
 * @property decimal remise
 * @property decimal eco-part
 * @property decimal ptht_cmd_four
 * @property decimal taxe_cmd_four
 * @property decimal ptttc_cmd_four
 */
class CommandeFournisseur extends Model
{
    //use SoftDeletes;

    public $table = 'cmd_four';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcmdfour' => 'integer',
        'idfournisseur' => 'integer',
        'date_cmd_four' => 'string',
        'etat_cmd_four' => 'integer',
        'date_livraison_cmd_four' => 'string',
        'art1' => 'string',
        'qte1' => 'string',
        'art2' => 'string',
        'qte2' => 'string',
        'art3' => 'string',
        'qte3' => 'string',
        'art4' => 'string',
        'qte4' => 'string',
        'art5' => 'string',
        'qte5' => 'string',
        'art6' => 'string',
        'qte6' => 'string',
        'art7' => 'string',
        'qte7' => 'string',
        'art8' => 'string',
        'qte8' => 'string',
        'art9' => 'string',
        'qte9' => 'string',
        'art10' => 'string',
        'qte10' => 'string',
        'art11' => 'string',
        'qte11' => 'string',
        'art12' => 'string',
        'qte12' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
