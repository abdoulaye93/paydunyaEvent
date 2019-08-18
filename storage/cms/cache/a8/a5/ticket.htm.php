<?php 
use event\event\models\Event;class Cms5d59d7a738090996002540_829f6f5b1481db30723a52c5a9c24f1aClass extends Cms\Classes\LayoutCode
{

public function onStart(){

    $this['id'] = Request::segment(5);
    $this['nomticket'] = Request::segment(2);
    $this['nbrticket'] = Request::segment(3);
    $this['montant'] =Request::segment(4);
    $this['event'] = Event::where('id',Request::segment(5))->get();
}
}
