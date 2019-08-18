<?php 
use event\event\models\NotifDemande;class Cms5d57f60ad788e648952927_193944a7fe66ca9c69fb30bc26d66faaClass extends Cms\Classes\PartialCode
{

public function onStart(){
    $this['notifs']=NotifDemande::all();
}
}
