<?php 
class Cms5d5431cc02943769328222_681a187c4d46103e848c30dd538abb50Class extends Cms\Classes\LayoutCode
{
public function onStart(){
  $this['date']=Request::segment(2);
  $this['mail']=Request::segment(3);
  $this['nom']=Request::segment(4);
  $this['description']=Request::segment(5);
  $this['lieu']=Request::segment(6);
}
}
