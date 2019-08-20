<?php 
use event\event\models\NotifDemande;class Cms5d5bd4dd4ce20227048841_1b0eff4450de32002f53f16b32cfd6ddClass extends Cms\Classes\PartialCode
{

public function onStart(){
    $this['notifs']=NotifDemande::all();
}
}
