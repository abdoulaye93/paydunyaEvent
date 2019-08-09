<?php 
use Carbon\Carbon;use event\event\models\Event;use event\event\models\NotifDemande;use Demande\Demande\Models\DemandeAnnullationAchat;class Cms5d4d3958896b8807752459_1049be21fcc715f1a642aae10d79057bClass extends Cms\Classes\LayoutCode
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
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option,$b);
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
