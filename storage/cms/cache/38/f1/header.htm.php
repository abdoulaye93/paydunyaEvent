<?php 
use event\event\models\NotifDemande;class Cms5d48aafced816145618634_ee0d12bc77620ea176347b8be4f7e00dClass extends Cms\Classes\PartialCode
{

public function onStart(){$this->prepareVars();}
public function prepareVars(){
  $this['notifs']=NotifDemande::all();
}
}
