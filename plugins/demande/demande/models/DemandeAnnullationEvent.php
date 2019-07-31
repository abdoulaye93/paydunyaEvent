<?php namespace Demande\Demande\Models;

use Model;

/**
 * Model
 */
class DemandeAnnullationEvent extends Model
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
        ],
        'event' => ['event\event\models\Event',
        'table'=>'event_event_']
    ];
    public function scopeListFrontEnd($query,$option = []){
        extract(array_merge([
            'page'=>1,
            'perPage'=>10,
            'sort'=>'created_at_desc'
        ],$option));
        $lastPage = $query->paginate($perPage, $page)->lastPage();

        if($lastPage < $page){
            $page = 1;
        }
        return $query->paginate($perPage,$page);
}
    /**
     * @var string The database table used by the model.
     */
    public $table = 'demande_demande_demande_annulation_event';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
