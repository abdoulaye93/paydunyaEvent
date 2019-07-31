<?php namespace ticket\Ticket\Models;

use Model;

/**
 * Model
 */
class Ticket extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $belongsTo = [
        'type' => 'ticket\ticket\models\Type',
        'table'=>'ticket_ticket_type'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ticket_ticket_ticket';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
