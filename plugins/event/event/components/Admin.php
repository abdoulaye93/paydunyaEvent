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
class Admin extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'Admin',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
       
     
    }
     //recuperation des evenements 
    public function loadEvents(){     
        $evenon = Event::all();
        return $evenon;
    }
     //recuperation des evenements publier
    public function loadpulichEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    //function pour la suppression d'un evenment
    public function onSave(){
        $b=Input::get('supprimer');
        Db::table('event_event_')->where('id',$b)->delete();
        return Redirect::back();
    }
    //function pour l'activation d'un evenement
    public function onActive(){
        $b=Input::get('activer');
        $pub=Input::get('pub');
        if($pub==true){
            $event=Db::table('event_event_')
            ->where('id', $b)
            ->update(['publier' => false]);
        }else{
            $event=Db::table('event_event_')
            ->where('id', $b)
            ->update(['publier' => true]);
        }
        return Redirect::back();
    }
   
}
