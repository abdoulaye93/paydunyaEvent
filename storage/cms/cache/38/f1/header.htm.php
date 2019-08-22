<?php 
use event\event\models\NotifDemande;class Cms5d5dc5e1deebd555414047_1fcd090f396322ead3db927ae25753e7Class extends Cms\Classes\PartialCode
{

public function onStart(){
    $this['notifs']=NotifDemande::all();
}
}
