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
use event\event\models\AccessEvent;
use event\event\models\NotifDemande;
use event\event\models\Position;
use Mail;
use Flash;
use Auth;
use rainlab\user\models\User;
use event\event\models\AchatList;
use Db;
use  BackendAuth;
use Config;
use Request;
use Carbon\Carbon;
use October\Rain\Support\Collection;
class ManageEvent extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'ManageEvent',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
        //activation et desactivation du droit de modification d'un evement a 5 avant l'evenment
        $date=new Carbon();
        Db::table('event_event_')
        ->join('event_event_periode', 'event_event_periode.id', '=', 'event_event_.periode_id')
        ->where('event_event_periode.date_debut','>',$date->addDays(-5))
        ->update(['modif_droit'=>true]);
        Db::table('event_event_')
        ->join('event_event_periode', 'event_event_periode.id', '=', 'event_event_.periode_id')
        ->where('event_event_periode.date_debut','<',$date->addDays(-5))
        ->update(['modif_droit'=>false]);
     
    }
    //recuperation des evenements des evenement d'un utilisateur
    public function loadEvents(){     
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    //recuperation des evenements des evenement d'un utilisateur
    public function loadpulichEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    //recuperation des evenements des evenement d'un utilisateur
    public function loadpEpirerEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    //annulation d'un evenement
    public function onAnnule(){
        $event_id=Input::get('event_id');
        $user_id=Input::get('user_id');
        $annule=Input::get('annule');
        if($annule==true){
            $event=Db::table('event_event_')
            ->where('id', $event_id)
            ->update(['annule_demande' => false]);
            Db::table('demande_demande_demande_annulation_event')->where('event_id',$event_id)->delete();
        }else{
            $event=Db::table('event_event_')
            ->where('id', $event_id)
            ->update(['annule_demande' => true]);
            $notif=new NotifDemande();
            $notif->save();
            $event=Db::table('event_event_')
            ->where('id', $event_id)->increment('demande_notif',1);
            $annuleDemande=new DemandeAnnullationEvent();
            $annuleDemande->user_id=$user_id;
            $annuleDemande->event_id=$event_id;
            $annuleDemande->save();
        }
       
       
        return Redirect::back();
    }
    //activation d'un evenment
    public function onActive(){
        $event_id=Request::segment(2);
        $email=Input::get('email');
        $user = Db::table('users')->where('email', Input::get('email'))->first();
        if($user){
            $accesEven=new AccessEvent();
            $accesEven->user_id=$user->id;
            $accesEven->event_id=$event_id;
            $accesEven->save();
            $vars = ['name' => 'Joe', 'user' => 'Mary'];
            Mail::send('event.event::mail.message', $vars, function($message) {
    
                $message->to(Input::get('email'), 'Admin Person');
                $message->subject('Invitation de suivre un évènement');
    
            });
            return Redirect::back();

        }else{
            return Redirect::to('/email_not_found');
        }
       
    }
    //recuperation de lurl en cours 
    public function loadUrl(){
        return Config::get('app.url');
    }
    //activation de du code promo d'un evement
    public function onPromo(){
        $event_id=Input::get('event_id');
        $promo=Input::get('promo');
        if($promo==true){
        }else{
            $event=Db::table('event_event_')
            ->where('id', $event_id)
            ->update(['promo' => true]);
            $event=Db::table('event_event_')
            ->where('id', $event_id)
            ->update(['code_promo' => str_random(10)]);
        }
       
       
        return Redirect::back();
    }
    //enregistrement de la position d'un evenement
    public function onPosition(){
        $event_id=Input::get('event');
        $position=new Position();
        $position->lat=Input::get('lat');
        $position->long=Input::get('long');
        $position->save();
        $id=$position->id;
        Db::table('event_event_')
        ->where('id', $event_id)
        ->update(['position_id' => $id]);
        return Redirect::back();
    }
    //envoi de mail de notification a tous les users qui ont participé a ton evenement
    function onPush(){
        if(sizeof($this->getMail())!=0){
            $vars = ['name' => 'Joe', 'user' => 'Mary'];
        Mail::send('event.event::mail.message', $vars, function($message) {
            $mail="";
            for ($i=0; $i<count($this->getMail()); $i++) {
                $mail= $mail.$this->getMail()[$i].",";
            }
            $mail=rtrim($mail,", ");
            $message->to([$mail], 'Admin Person');
            $message->subject('new event');
           });
        }  
    }
    //recuperation de l'enemble des mail des uers qui ont participé a ton evenement
    public function getMail(){
        $u= Db::table('event_event_achat')
        ->join('event_event_', function ($join) {
            $join->on('event_event_achat.event_id', '=', 'event_event_.id')
                ->where('event_event_.user_id', '=', Auth::getUser()->id);
        })
        ->get();
        $emptyArray = [];
        foreach($u as $i){    
         $emptyArray[]=$i->user_email;
        
     }
     return $emptyArray;
    }
    function onStart(){
      
    }
   
}
