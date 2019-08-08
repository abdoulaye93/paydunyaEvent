<?php namespace event\event\components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use event\event\models\Event;
use event\event\models\Type;
use event\event\models\Sub;
use event\event\models\Periode;
use event\event\models\SubList;
use Flash;
use Db;
use Config;
use Carbon\Carbon;
use October\Rain\Support\Collection;
class EventList extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'Eventlist',
            'description'=>'Entrer un évènement'
        ];
    }
   //recuperation de la periode d'un evenement
    public function priode($id){
        $perio = Db::table('event_event_periode')->where('id', $id)->first();
        return $perio;
     
    }
    public function onRun(){
        Config::get('app.url'); 
        $this->prepareVarsevnt();
    }
    //recuperation de l'ensemble des evements
    public function loadEvents(){  
       
        return Event::all();
    }
    //recuperation de evenement expirer
    public function loadEventsExpire(){
        $eventexpire =Db::table('event_event_')
        ->join('event_event_periode', function ($join) {
            $join->on('event_event_.periode_id', '=', 'event_event_periode.id')
                ->where('event_event_periode.date_cloture', '<', Carbon::now());
        })
        ->get();
      
        return $eventexpire;
    }
    //recuperation des evenements activé
    public function loadEventsActive(){
        $eventexpire =Db::table('event_event_')
        ->join('event_event_periode', function ($join) {
            $join->on('event_event_.periode_id', '=', 'event_event_periode.id')
                ->where('event_event_periode.date_cloture', '>', Carbon::now());
        })
        ->get();
        return $eventexpire;
    }
    //declaration des variables au demarage
    function onStart(){$this->prepareVarsevnt();}
    //preparation des variables 
    function prepareVarsevnt(){
    $option=post('Filter',[]);
    $eventsactive=Db::table('event_event_')
    ->join('event_event_periode', function ($join) {
        $join->on('event_event_.periode_id', '=', 'event_event_periode.id')
            ->where('event_event_periode.date_cloture', '<', Carbon::now());
    })
    ->get();
    }
}
