<?php 
use event\event\models\Event;class Cms5d4af7ecebcc7135990675_d393a16654bd26ab110bd2e9e53070d2Class extends Cms\Classes\LayoutCode
{

public function onStart(){

    $this['id'] = Request::segment(5);
    $this['nomticket'] = Request::segment(2);
    $this['nbrticket'] = Request::segment(3);
    $this['montant'] =Request::segment(4);
    $this['event'] = Event::where('id',Request::segment(5))->get();
}
}
