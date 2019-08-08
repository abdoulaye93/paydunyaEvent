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
class Achat extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'achat',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
       
     
    }
    function onStart(){

    }
   
   
   
}
