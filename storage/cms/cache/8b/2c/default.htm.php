<?php 
use Carbon\Carbon;use event\event\models\Event;use event\event\models\NotifDemande;use Demande\Demande\Models\DemandeAnnullationAchat;use event\event\models\AccessEvent;use event\event\models\AcessEvent;use ticket\ticket\models\Type;class Cms5d5c15a752bc1882716147_bfcc8fe71dcaf0dffec3c3b1d49f540fClass extends Cms\Classes\LayoutCode
{
  
  
  
  
  
  
  
public function onStart()
  {
    $this->prepareVars();
    $this->prepareVarsAccess(); 
  }
public function onFilterEvents() 
  { 
    $this->prepareVars(); 
  }
public function onFilterAccess() 
  { 
    $this->prepareVarsAccess(); 
  }
public function prepareVars()
  {
    $b=null;
    $typ=null;
    $option=post('Filter',[]);
    $this['events']=Event::ListFrontEnd($option,$b,$typ);
    $this['pages']=$this['events']->lastPage(); 
    $this['tickets']=Type::all();
  }
public function prepareVarsAccess()
  {
    $optionaccess=post('Filter',[]);
    $this['accessevents']=AcessEvent::ListFrontEnd($optionaccess);
    $this['accesspages']=$this['accessevents']->lastPage(); 
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
