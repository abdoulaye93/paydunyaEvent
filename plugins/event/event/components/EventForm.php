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
use October\Rain\Support\Collection;
class EventForm extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'EventForm',
            'description'=>'Entrer un évènement'
        ];
    }
    public function onSave(){
        $event=new Event();
        $periode=new Periode();
        $periode->date_debut=Input::get('date_event');
        $periode->date_cloture=Input::get('date_cloture');
        $periode->save();
        $event->periode_id=$periode->id;
        $event->nom=Input::get('nom');
        $event->lieu=Input::get('lieu');
        $event->montant=Input::get('montant');
        $event->nombre_ticket=Input::get('nbrticket');
        $event->montant=Input::get('montant');
        $event->description=Input::get('description');
        $event->user_id=Input::get('user');
        $event->publier=false;
        $event->annule_demande=false;
        $event->eventimage=Input::file('img');
        if(Input::get('gratuit')){
            $event->etat_event=true;
        }else{
            $event->etat_event=false;
        }
        
      $event->type_id= Input::get('category');
      $event->save();
      
      $nb=0;
      while($nb<=Input::get('nbsub')){
       $sub=new Sub();
       $list=new SubList();
        $sub->nom=Input::get("subnom".$nb);
        $sub->montant=Input::get('submontant'.$nb);
        $sub->nbrplace=Input::get('subnbrplace'.$nb);
        $sub->description=Input::get('subdescription'.$nb);
        $sub->jour=Input::get('subjour'.$nb);
        $sub->subimage=Input::file('img');
        $sub->save();
        $list->event_id=$event->id;
        $list->sub_id=$sub->id;
        $list->save();
          $nb++;
      }
      // echo Input::get('nbsub');
        Flash::success('évènement a été créer');
        return Redirect::back();
       
    }
   public  $subs ;
    public function onSave1(){
      $collection=new Collection();
       $sub=new Sub();
       $sub->nom=Input::get('nom1');
       $sub->montant=Input::get('montant1');
      $collection->prepend($sub);
      echo $collection;
        Flash::success('évènement a été créer');
        return Redirect::back();
    }
    public function onRun(){
        $this->types=$this->loadEvents();
    }
    public function loadEvents(){
        return Type::all();
    }
    public function loadSubs(){
        return Type::all();
    }
    
    public $types;
    public function setSub($par){
        $this->$subs=$par;
    }
}



