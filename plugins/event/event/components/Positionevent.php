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
class Positionevent extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'Positionevent',
            'description'=>'Modifi un sous  évènement'
        ];
    }
   
    public function onRun(){   
      
    }
    public function loadEvents(){     
        $b=Request::segment(2);
        $evenon = Sub::where('id',$b)->get();
        return $evenon;
    }
    public function loadLat(){
        $lat=Request::segment(2);
        return $lat;
       
    }
    public function loadLong(){
       $long= Request::segment(3);
     return  $long;
    }
   
}
