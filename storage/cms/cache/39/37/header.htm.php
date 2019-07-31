<?php 
use event\event\models\NotifDemande;class Cms5d3ef0fa29046810268799_da8b78bd7a6b05af38c11a62d8c956a9Class extends Cms\Classes\PartialCode
{

public function onStart(){$this->prepareVars();}
public function prepareVars(){
  $this['notifs']=NotifDemande::all();
}
}
