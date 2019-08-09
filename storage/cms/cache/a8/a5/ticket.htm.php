<?php 
use event\event\models\Event;class Cms5d4d458e9855a220515918_90b3d3b1674925527aa4030e78d2b486Class extends Cms\Classes\LayoutCode
{

public function onStart(){

    $this['id'] = Request::segment(5);
    $this['nomticket'] = Request::segment(2);
    $this['nbrticket'] = Request::segment(3);
    $this['montant'] =Request::segment(4);
    $this['event'] = Event::where('id',Request::segment(5))->get();
}
}
