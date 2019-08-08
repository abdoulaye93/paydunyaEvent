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
class ModifSub extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'ModifSub',
            'description'=>'Modifier un sous  évènement'
        ];
    }
   
    public function onRun(){   
    }
    //recuperation d'un evenement 
    public function loadEvents(){     
        $b=Request::segment(2);
        $evenon = Sub::where('id',$b)->get();
        return $evenon;
    }
    //modification d'un sous evenement
    public function onSave(){
        $b=Request::segment(2);
        $pd1 = Sub::where('id',$b)->first();
        if(Input::get('jour')!=$pd1->jour){
            $event=Db::table('event_event_sub')
            ->where('id', $b)
            ->update(['jour' => Input::get('jour')]);
        }
    if(Input::get('nom')!=$pd1->nom){
        $event=Db::table('event_event_sub')
        ->where('id', $b)
        ->update(['nom' => Input::get('nom')]);
    }
  
    if(Input::get('description')!=$pd1->description){
        $event=Db::table('event_event_sub')
        ->where('id', $b)
        ->update(['description' => Input::get('description')]);
    }
    if(Input::get('nbrticket')!=$pd1->nbrplace){
        $event=Db::table('event_event_sub')
        ->where('id', $b)
        ->update(['nbrplace' => Input::get('nbrticket')]);
    }
    if(Input::get('montant')!=$pd1->montant){
        $event=Db::table('event_event_sub')
        ->where('id', $b)
        ->update(['montant' => Input::get('montant')]);
    }
    if(Input::file('image')){
        $event=Db::table('event_event_sub')
        ->where('id', $b)
        ->update(['subimage' => Input::file('image')]);
    }
   
    return Redirect::back();
    }
   
}
