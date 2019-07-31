<?php namespace Event\Event\Models;

use Model;

/**
 * Model
 */
class Position extends Model
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
    public $table = 'event_event_position';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
