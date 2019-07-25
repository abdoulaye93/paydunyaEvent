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
    public function onSave(){
      
    }
   
    public function priode($id){
        $perio = Db::table('event_event_periode')->where('id', $id)->first();
        return $perio;
     
    }
    public function onRun(){
        $this->prepareVarsevnt();
    }
    public function loadEvents(){   
        return Event::all();
    }
    public function loadEventsExpire(){
        $eventexpire =Db::table('event_event_')
        ->join('event_event_periode', function ($join) {
            $join->on('event_event_.periode_id', '=', 'event_event_periode.id')
                ->where('event_event_periode.date_cloture', '<', Carbon::now());
        })
        ->get();
      
        return $eventexpire;
    }
    public function loadEventsActive(){
        $eventexpire =Db::table('event_event_')
        ->join('event_event_periode', function ($join) {
            $join->on('event_event_.periode_id', '=', 'event_event_periode.id')
                ->where('event_event_periode.date_cloture', '>', Carbon::now());
        })
        ->get();
        return $eventexpire;
    }
    function onStart(){$this->prepareVarsevnt();}
function prepareVarsevnt(){
  $option=post('Filter',[]);
  $eventsactive=Db::table('event_event_')
  ->join('event_event_periode', function ($join) {
      $join->on('event_event_.periode_id', '=', 'event_event_periode.id')
          ->where('event_event_periode.date_cloture', '<', Carbon::now());
  })
  ->get();
  /*$this['eventexpire']=Db::table('event_event_')
  ->join('event_event_periode', function ($join) {
      $join->on('event_event_.periode_id', '=', 'event_event_periode.id')
          ->where('event_event_periode.date_cloture', '<', Carbon::now());
  })
  ->get();*/
}
}
