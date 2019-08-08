<?php namespace Event\Event\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $belongsTo = [
        'type' => ['event\event\models\Type',
        'table'=>'event_event_type'],
        'periode' => ['event\event\models\Periode',
        'table'=>'event_event_periode'],
        'sub_event' => ['event\event\models\Sub',
        'table'=>'event_event_sub'],
        'user' => ['rainlab\user\models\User',
        'table'=>'users'],
        'position' => ['event\event\models\Position',
        'table'=>'event_event_position']
    ];
    
    public $belongsToMany = [
        'users' => [
            'rainlab\user\models\User',
            'table'=> 'event_event_access_event'
        ],
        'subs' => [
            'event\event\models\Sub',
            'table'=> 'event_event_sub_event'
        ]
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'event_event_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    //filtrage de levenment
    public function scopeListFrontEnd($query,$option = [],$b){
            extract(array_merge([
                'page'=>1,
                'perPage'=>6,
                'sort'=>'priorite'
            ],$option));
            $lastPage = $query->paginate($perPage, $page)->lastPage();

            if($lastPage < $page){
                $page = 1;
            }
            return $query->paginate($perPage,$page);
    }
    public $attachOne = [
        'eventimage'=>'System\Models\File'
    ];
    public function getImageAttribute()
    {
        $project = Event::find($this->id);
        
        if($project->eventimage){
            return $project->eventimage->getPath();
        }else{
            return "";
        }
    
    }



}
