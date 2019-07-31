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
    public function scopeListFrontEnd($query,$option = []){
        extract(array_merge([
            'page'=>1,
            'perPage'=>15,
            'sort'=>'created_at_desc'
        ],$option));
        $lastPage = $query->paginate($perPage, $page)->lastPage();

        if($lastPage < $page){
            $page = 1;
        }
        return $query->paginate($perPage,$page);
}
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
