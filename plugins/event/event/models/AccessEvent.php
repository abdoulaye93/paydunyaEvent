<?php namespace Event\Event\Models;

use Model;

/**
 * Model
 */
class AccessEvent extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $belongsTo = [
        'users' => ['rainlab\user\models\User',
        'table'=>'users'],
        'event' => ['event\event\models\Event',
        'table'=>'event_event_']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'event_event_access_event';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
