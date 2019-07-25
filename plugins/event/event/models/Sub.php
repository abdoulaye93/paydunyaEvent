<?php namespace Event\Event\Models;

use Model;

/**
 * Model
 */
class Sub extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $belongsToMany = [
        'events' => [
            'event\event\models\Event',
            'table'=> 'event_event_sub_event'
        ]
    ];
    public $attachOne = [
        'subimage'=>'System\Models\File'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'event_event_sub';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
