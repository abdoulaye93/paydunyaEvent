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
class ManageEventEdit extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'ManageEventEdit',
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
    //recuperation des sous evenement d'un evenment
    public function loadSevent(){     
        $b=Request::segment(2);
        $evenon=SubList::where('event_id',$b)
        ->get();
        return $evenon;
    }
    //recuperation des evenement d'un user
    public function loadpulichEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    //recuperation des evenement d'un user
    public function loadpEpirerEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    //recuperation des type d'evenement
    public function loadSubs(){
        return Type::all();
    }
    //modification d'un evenement
    public function onSave(){
        $b=Request::segment(2);
        $pd1 = Event::where('id',$b)->first();
        $pdid=$pd1->periode_id;
        $pd = Db::table('event_event_periode')->where('id',$pdid)->first();
        if(Input::get('date_debut')!=$pd->date_debut){
            Db::table('event_event_periode')
            ->where('id',$pdid)
            ->update(['date_debut' => Input::get('date_debut')]);
        }
         if(Input::get('date_cloture')!=$pd->date_cloture){
            Db::table('event_event_periode')
            ->where('id',$pdid)
            ->update(['date_cloture' => Input::get('date_cloture')]);
        }
    if(Input::get('nom')!=$pd1->nom){
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['nom' => Input::get('nom')]);
    }
    if(Input::get('lieu')!=$pd1->lieu){
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['lieu' => Input::get('lieu')]);
    }
    if(Input::get('category')!=$pd1->type_id){
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['type_id' => Input::get('category')]);
    }
    
    if(Input::get('description')!=$pd1->description){
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['description' => Input::get('description')]);
    }
    if(Input::get('nbrticket')!=$pd1->nombre_ticket){
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['nombre_ticket' => Input::get('nbrticket')]);
    }
    if(Input::get('montant')!=$pd1->montant){
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['montant' => Input::get('montant')]);
    }
    if(Input::get('gratuitt')){
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['gratuit' => true]);
    }
    if(Input::get('nongratuitt')){
        $event=Db::table('event_event_')
        ->where('id', $b)
        ->update(['gratuit' => false]);
    }
    return Redirect::back();
    }
   
}
