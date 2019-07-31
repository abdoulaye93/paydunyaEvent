<?php 
use event\event\models\NotifDemande;
class Cms5d415d8bd9c67406569131_3230a64d458e0d648991250d3929cf26Class extends Cms\Classes\PartialCode
{
public function onStart(){$this->prepareVars();}
public function prepareVars(){
  $this['notifs']=NotifDemande::all();
}
}
