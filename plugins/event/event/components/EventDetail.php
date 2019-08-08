<?php namespace event\event\components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use event\event\models\Event;
use event\event\models\Type;
use event\event\models\Sub;
use event\event\models\Periode;
use ticket\ticket\models\TypeTicket;
use event\event\models\SubList;
use Flash;
use Db;
use Request;
use Carbon\Carbon;
use October\Rain\Support\Collection;
class EventDetail extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'EventDetail',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
       
     
    }
    //recuperation d'un evenement
    public function loadEvents(){     
        $b=Request::segment(2);
        $evenon = Event::where('id',$b)->get();
        return $evenon;
    }
    //recuperation du type de ticket d'un evenement
    public function loadTypeticket(){
        $b=Request::segment(2);
        $subevent = TypeTicket::where('event_id',$b)->get();
        return $subevent;
    }
    //recuperation des sous evenement d'un evenement
    public function loadSubEvent(){
        $b=Request::segment(2);
        $subevent = SubList::where('event_id',$b)->get();
        return $subevent;
    }
   
}
