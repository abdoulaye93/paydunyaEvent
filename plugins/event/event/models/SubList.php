<?php namespace Event\Event\Models;

use Model;

/**
 * Model
 */
class SubList extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $belongsTo = [
        'sub' => ['event\event\models\Sub',
        'table'=>'event_event_sub'],
        'event' => ['event\event\models\Event',
        'table'=>'event_event_']
    ];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'event_event_sub_event_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
