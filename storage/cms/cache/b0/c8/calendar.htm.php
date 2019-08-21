<?php 
class Cms5d5d15c60739a453948810_81236b8798f4d39117a9fccf64eda2fdClass extends Cms\Classes\LayoutCode
{
public function onStart(){
  $this['date']=Request::segment(2);
  $this['mail']=Request::segment(3);
  $this['nom']=Request::segment(4);
  $this['description']=Request::segment(5);
  $this['lieu']=Request::segment(6);
}
}
