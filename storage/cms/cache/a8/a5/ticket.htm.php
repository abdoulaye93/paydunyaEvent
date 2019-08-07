<?php 
use event\event\models\Event;class Cms5d4ab612ae01b976423648_608d2df74e96977f0f12f62322420171Class extends Cms\Classes\LayoutCode
{

public function onStart(){

    $this['id'] = Request::segment(5);
    $this['nomticket'] = Request::segment(2);
    $this['nbrticket'] = Request::segment(3);
    $this['montant'] =Request::segment(4);
    $this['event'] = Event::where('id',Request::segment(5))->get();
}
}
