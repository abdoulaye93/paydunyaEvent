<?php 
use Carbon\Carbon;use event\event\models\Event;use event\event\models\NotifDemande;use Demande\Demande\Models\DemandeAnnullationAchat;class Cms5d59b922f127c519955098_7e993174444e9413d8b86dd0ae0f7b73Class extends Cms\Classes\LayoutCode
{




public function onStart()
{
  $this->prepareVars();
}
public function onFilterEvents() 
{ 
  $this->prepareVars(); 
}
public function prepareVars()
{
  $b=Request::segment(2);
  $typ=null;
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option,$b,$typ);
  $this['pages']=$this['events']->lastPage(); 
}
public function onAnnuler() 
  {
    $user = Auth::getUser();
    $notif = new NotifDemande();
    $annulation = new DemandeAnnullationAchat();
    $annulation->user_id = $user->id;
    $annulation->email = $user->email;
    $annulation->save();
    $notif->save();
    Flash::success('Votre demande d\'annulation a bien été transmise, nous vous revenons dans un moment !');
    return Redirect::to('/');
  }
}
