<?php namespace ticket\Ticket\Models;

use Model;

/**
 * Model
 */
class TicketTypeList extends Model
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
    public $table = 'ticket_ticket_typelist';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
