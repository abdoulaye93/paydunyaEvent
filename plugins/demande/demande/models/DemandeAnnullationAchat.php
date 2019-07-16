<?php namespace Demande\Demande\Models;

use Model;

/**
 * Model
 */
class DemandeAnnullationAchat extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $belongsTo = [
        'users' => [
            'rainlab\user\models\User',
            'table'      => 'users'
        ]
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'demande_demande_demande_annulation_achat';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
