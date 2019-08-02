<?php 
use event\event\models\NotifDemande;
class Cms5d432e932a467633707873_fcf1e695142d8d4e979b3ba3b20aecf4Class extends Cms\Classes\PartialCode
{
public function onStart(){$this->prepareVars();}
public function prepareVars(){
  $this['notifs']=NotifDemande::all();
}
}
