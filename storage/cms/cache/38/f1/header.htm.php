<?php 
use event\event\models\NotifDemande;class Cms5d4c1a3e86ca5294981563_a1f888741629580d9be8bd1c1860278cClass extends Cms\Classes\PartialCode
{

public function onStart(){
    $this['notifs']=NotifDemande::all();
}
}
