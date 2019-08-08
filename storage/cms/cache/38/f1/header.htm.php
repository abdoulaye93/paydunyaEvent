<?php 
use event\event\models\NotifDemande;class Cms5d4afbeb1a420683545027_68ee9c0216ea73c11aaf8cf10bd86367Class extends Cms\Classes\PartialCode
{

public function onStart(){
    $this['notifs']=NotifDemande::all();
}
}
