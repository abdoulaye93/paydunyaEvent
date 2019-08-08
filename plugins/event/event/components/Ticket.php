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
use Config;
use Carbon\Carbon;
use October\Rain\Support\Collection;
class Ticket extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'ticketimprime',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
       
     
    }
    //recuperation du montant dans l'url
    public function loadMontant(){     
        $b=Request::segment(2);
        return $b;
    }
    //recuoeration des sous evenement d'un evenment 
    public function loadSubEvent(){
        $b=Request::segment(2);
        $subevent = SubList::where('event_id',$b)->get();
        return $subevent;
    }
   
   
}
