<?php 
class Cms5d5d191e4f36e911687917_378cb3af6c24a2b7183c43d259da4c12Class extends Cms\Classes\LayoutCode
{
public function onStart(){
  $this['date']=Request::segment(2);
  $this['mail']=Request::segment(3);
  $this['nom']=Request::segment(4);
  $this['description']=Request::segment(5);
  $this['lieu']=Request::segment(6);
}
}
