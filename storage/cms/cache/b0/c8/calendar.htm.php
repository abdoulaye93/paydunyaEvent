<?php 
class Cms5d5bbe444da6b687248773_2c5dba485f94a2cf5ceebe59389692a3Class extends Cms\Classes\LayoutCode
{
public function onStart(){
  $this['date']=Request::segment(2);
  $this['mail']=Request::segment(3);
  $this['nom']=Request::segment(4);
  $this['description']=Request::segment(5);
  $this['lieu']=Request::segment(6);
}
}
