<?php namespace Event\Event\Models;

use Model;

/**
 * Model
 */
class Type extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $belongsTo = [
        'categorie' => 'event\event\models\Categorie',
        'table'=>'event_event_categorie'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'event_event_type';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
