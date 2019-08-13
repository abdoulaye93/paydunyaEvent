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
use ticket\ticket\models\TypeTicket;
use event\event\models\Categorie;
use Flash;
use Db;
use ValidationException;
use October\Rain\Support\Collection;
class EventForm extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'EventForm',
            'description'=>'Entrer un évènement'
        ];
    }
    //creation d'un evenement
    public function onSave(){
        $data = post();

        $rules = [
            'nom' => 'required',
            'lieu' => 'required',
            'date_event' => 'required',
            'date_cloture' => 'required',
            'nbrticket' => 'required',
            'description' => 'required',
        ];
    
        $validation = Validator::make($data, $rules);
    
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }
        $event=new Event();
        $periode=new Periode();
        $periode->date_debut=Input::get('date_event');
        $periode->date_cloture=Input::get('date_cloture');
        $periode->save();
        $event->periode_id=$periode->id;
        $event->nom=Input::get('nom');
        $event->lieu=Input::get('lieu');
       // $event->montant=Input::get('montant');
        $event->nombre_ticket=Input::get('nbrticket');
       // $event->montant=Input::get('montant');
        $event->description=Input::get('description');
        $event->user_id=Input::get('user');
        $event->publier=false;
        $event->annule_demande=false;
        $event->demande_notif=0;
        $event->eventimage=Input::file('img');
        if(Input::get('gratuit')){
            $event->etat_event=true;
        }else{
            $event->etat_event=false;
        }
        if(Input::get('code')){
            $event->promo=true;
            $event->code_promo=str_random(10);
        }else{
            $event->promo=false;
        }
        if(Input::get('cate')){
            $event->categorie=Input::get('cate');
            $event->save();
        }else{
            $event->type_id= json_decode(Input::get('category'))->id;
           $event->save();
        }
      
      $nb=1;
      while($nb<Input::get('nbsub')){
         // if(Input::get("subnom".$nb)&&Input::get('submontant'.$nb)&&Input::get('subnbrplace'.$nb)&&Input::get('subdescription'.$nb)&&Input::get('subjour'.$nb)&&Input::file('subimg'.$nb)){
            $sub=new Sub();
            $list=new SubList();
             $sub->nom=Input::get("subnom".$nb);
             $sub->montant=Input::get('submontant'.$nb);
             $sub->nbrplace=Input::get('subnbrplace'.$nb);
             $sub->description=Input::get('subdescription'.$nb);
             $sub->jour=Input::get('subjour'.$nb);
            // dd(Input::file("subimg".$nb));
             $sub->subimage=Input::file("subimg".$nb."");
             $sub->save();
             $list->event_id=$event->id;
             $list->sub_id=$sub->id;
             $list->save();
        //  }
          $nb++;
      }
      $nbtype=1;
      while($nbtype<Input::get('nbtype')){
          if(Input::get("typenom".$nbtype)&&Input::get('typemontant'.$nbtype)){
            $type=new TypeTicket();
            $type->event_id=$event->id;
            $type->nom_type=Input::get("typenom".$nbtype);
            $type->montant=Input::get('typemontant'.$nbtype);
            if(Input::file('typeimg')){
                $type->typeticketimage=Input::file("typeimg".$nbtype."");
            }
            $type->save();
          }
        $nbtype++;
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
    //recuperation des types d'evenement
    public function loadEvents(){
        return Type::all();
    }
    //recuperation des types d'evenement
    public function loadSubs(){
        return Type::all();
    }
    
    public $types;
    public function setSub($par){
        $this->$subs=$par;
    }
    //recuperation des categorie d'evenement
    public function loadCategory(){
        return Categorie::all();
    }
    //enregistrement de la categorie par defaut
    public function onType(){
        $c=new Categorie();
        $c->categorie="autre";
        $c->save();
        $type=Input::get('type');
        $t=new Type();
        $t->nom_type=$type;
        $t->categorie_id=$c->id;
        $t->save();
        return Redirect::back();
       
    }
}



