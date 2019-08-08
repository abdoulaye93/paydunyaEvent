<?php 
use event\event\models\AchatList;use event\event\models\AnnulleAchat;class Cms5d4c2716a02db671262684_2713cab97a4e033adfcdc29aacc8df51Class extends Cms\Classes\PageCode
{


public function onStart(){
        $user = Auth::getUser();
        $this['achats'] = AchatList::where('user_email', '=', $user->email)->get();
    }
public function onAnnuleachat(){
        $user = Auth::getUser();
        $annulle=new AnnulleAchat();
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
        Db::table('event_event_annule_achat')->where('user_send_id', '=', $user->id)
        ->where('event_id', '=', Input::get('event'))->delete();
        Db::table('event_event_achat')
        ->where('user_email', $user->email)->where('event_id',Input::get('event'))
        ->update(['state' => false]);
        return Redirect::back();
    }
}
