<?php 
use event\event\models\AchatList;use event\event\models\AnnulleAchat;use event\event\models\Annulachat1;class Cms5d4c35983235e408365788_cf35b03973307b6ae17dc8447fd2139cClass extends Cms\Classes\PageCode
{



public function onStart(){
        $user = Auth::getUser();
        $this['achats'] = AchatList::where('user_email', '=', $user->email)->get();
    }
public function onAnnuleachat(){
        $user = Auth::getUser();
        $annulle=new Annulachat1();
        $annulle->event_id=Input::get('event');
        $annulle->user_send_id=$user->id;
        $annulle->montant=Input::get('montant');
        $annulle->save();
        Db::table('event_event_achat')
        ->where('user_email', $user->email)->where('event_id',Input::get('event'))
        ->update(['state' => true]);
        
        return Redirect::back();
    }
public function onAnnuledemanade(){
        $user = Auth::getUser();
        Db::table('event_event_annule_achat1')->where('user_send_id', '=', $user->id)
        ->where('event_id', '=', Input::get('event'))->delete();
        Db::table('event_event_achat')
        ->where('user_email', $user->email)->where('event_id',Input::get('event'))
        ->update(['state' => false]);
        return Redirect::back();
    }
}
