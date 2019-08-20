<?php 
use Carbon\Carbon;use event\event\models\Event;use event\event\models\NotifDemande;use Demande\Demande\Models\DemandeAnnullationAchat;class Cms5d5bd6ea4febd943695732_9041d9c313000a18b0790e1199bc3c66Class extends Cms\Classes\LayoutCode
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
