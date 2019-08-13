<?php 
use event\event\models\NotifDemande;class Cms5d52fe472d9e6473484010_fa3f284b1b226168e89406bea8f8d3a5Class extends Cms\Classes\PartialCode
{

public function onStart(){
    $this['notifs']=NotifDemande::all();
}
}
