<?php namespace Event\Event\Models;

use Model;

/**
 * Model
 */
class AnnulleAchat extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'event_event_annule_achat';
    public $belongsTo = [
        'event' => ['event\event\models\Event',
        'table'=>'event_event_'],
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
