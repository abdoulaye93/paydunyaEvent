<?php 
use event\event\models\Event;class Cms5d5e7c1e807d9183039244_3a789ee1eb683f7d3494e5532876f2feClass extends Cms\Classes\LayoutCode
{

public function onStart(){

    $this['id'] = Request::segment(5);
    $this['nomticket'] = Request::segment(2);
    $this['nbrticket'] = Request::segment(3);
    $this['montant'] =Request::segment(4);
    $this['event'] = Event::where('id',Request::segment(5))->get();
}
}
