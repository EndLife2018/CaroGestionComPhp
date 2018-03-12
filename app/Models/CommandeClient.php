<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CommandeClient
 * @package App\Models
 * @version February 5, 2018, 7:36 pm UTC
 *
 * @property integer idclient
 * @property string date
 * @property integer etat_cmd_cli
 * @property string date_liv_cmd_cli
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
 * @property string ptht_cmd_cli
 * @property integer taxe_cmd_cli
 * @property string ptttc_cmd_cli
 */
class CommandeClient extends Model
{
    //use SoftDeletes;

    public $table = 'cmd_cli';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcmdcli' => 'integer',
        'idclient' => 'integer',
        'date' => 'string',
        'etat_cmd_cli' => 'integer',
        'date_liv_cmd_cli' => 'string',
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
        'qte12' => 'string',
        'ptht_cmd_cli' => 'string',
        'taxe_cmd_cli' => 'integer',
        'ptttc_cmd_cli' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
