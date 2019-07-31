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
class Promo extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'promo',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
       
     
    }
    public function loadEvents(){     
        $b=Request::segment(2);
        $evenon = Event::where('id',$b)->get();
        return $evenon;
    }
    public function loadSubEvent(){
        $b=Request::segment(2);
        $subevent = SubList::where('event_id',$b)->get();
        return $subevent;
    }
   
   
}
