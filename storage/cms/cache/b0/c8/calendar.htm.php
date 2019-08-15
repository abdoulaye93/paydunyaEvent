<?php 
class Cms5d5438fc20c2c161375981_5950140e0a90396419dc292b0bfa3f48Class extends Cms\Classes\LayoutCode
{
public function onStart(){
  $this['date']=Request::segment(2);
  $this['mail']=Request::segment(3);
  $this['nom']=Request::segment(4);
  $this['description']=Request::segment(5);
  $this['lieu']=Request::segment(6);
}
}
