<?php 
use event\event\models\NotifDemande;class Cms5d4adaff5046a256161268_b750f5cadda7413752ea827e210e2178Class extends Cms\Classes\PartialCode
{

public function onStart(){
    $this['notifs']=NotifDemande::all();
}
}
