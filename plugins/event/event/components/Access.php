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
use Mail;
use Flash;
use Db;
use Request;
use Carbon\Carbon;
use October\Rain\Support\Collection;
class Access extends ComponentBase
{
    
    public function componentDetails(){
        return [
            'name'=>'Access',
            'description'=>'Entrer un évènement'
        ];
    }
   
    public function onRun(){
       
     
    }
    public function loadEvents(){     
        $b=Request::segment(2);
        $evenon = AccessEvent::where('user_id',$b)->get();
        return $evenon;
    }
    public function loadpulichEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
    public function loadpEpirerEvent(){
        $b=Request::segment(2);
        $evenon = Event::where('user_id',$b)->get();
        return $evenon;
    }
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
            $annuleDemande=new DemandeAnnullationEvent();
            $annuleDemande->user_id=$user_id;
            $annuleDemande->event_id=$event_id;
            $annuleDemande->save();
        }
       
        $vars = ['name' => 'Joe', 'user' => 'Mary'];

        Mail::send('rainlab.user::mail.invite', $vars, function($message) {

            $message->to('abdoulayekeita438@gmail.com', 'Admin Person');
            $message->subject('This is a reminder');

        });
        return Redirect::back();
    }
    public function onActive(){
        $event_id=Request::segment(2);
        $email=Input::get('email');
        $user = Db::table('users')->where('email', $email)->first();
        if($email==$user->email){
            $accesEven=new AccessEvent();
            $accesEven->user_id=$user->id;
            $accesEven->event_id=$event_id;
            $accesEven->save();
            return Redirect::back();

        }else{
            return Redirect::to('user/login');
        }
       
    }
   
}
