<?php 
use event\event\models\NotifDemande;class Cms5d4af1b658392515412523_5fc2317ce0e9f21f02bc801001e66486Class extends Cms\Classes\PartialCode
{

public function onStart(){
    $this['notifs']=NotifDemande::all();
}
}
