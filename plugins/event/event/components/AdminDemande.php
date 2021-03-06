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
use demande\demande\models\DemandeAnnullationEvent;
use rainlab\user\models\User;
use Flash;
use Db;
use Request;
use Carbon\Carbon;
use October\Rain\Support\Collection;
class AdminDemande extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'AdminDemande',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
        //supprimer les demande notification une fois vusialiser
        Db::table('event_event_notif_demande')->truncate();
     
    }
    //recuperation des demandes d'annulation d'un evenement
    public function loadEvents(){     
        return DemandeAnnullationEvent::all();
    }
    //suppression de la demande d'annulation d'un evenement et de l'evenment meme
    public function onSup(){
        $b=Input::get('supprimer');
        Db::table('event_event_')->where('id',$b)->delete();
        Db::table('demande_demande_demande_annulation_event')->where('event_id',$b)->delete();
        return Redirect::back();
    }
    
   
}
