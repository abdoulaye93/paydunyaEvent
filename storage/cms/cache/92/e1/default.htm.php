<?php 
use Carbon\Carbon;
use event\event\models\Event;
use event\event\models\NotifDemande;
use Demande\Demande\Models\DemandeAnnullationAchat;
class Cms5d48b0a899046576787687_da49f892de7a3b7bb04e916761a2c428Class extends Cms\Classes\LayoutCode
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
    $option=post('Filter',[]);
    $this['events']=Event::ListFrontEnd($option);
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
