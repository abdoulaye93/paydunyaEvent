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
use Request;
use Carbon\Carbon;
use October\Rain\Support\Collection;
class ManaEventView extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'ManageEventView',
            'description'=>'Entrer un évènement'
        ];
    }
   //renitialisation de la demande de notification 
    public function onRun(){
        $b=Request::segment(2);
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['demande_notif' => 0]);
    }
    //recuperation d'un evenement a travers son id
    public function loadEvents(){     
        $b=Request::segment(2);
        $evenon = Event::where('id',$b)->get();
        return $evenon;
    }
    //recuperation des evenments d'un utilisateur
    public function loadpulichEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    //recuperation des evenments d'un utilisateur
    public function loadpEpirerEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
   
}
