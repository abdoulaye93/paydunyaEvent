<?php 
use Carbon\Carbon;
use event\event\models\Event;
class Cms5d432e931ea83203397363_c8c394279f3af12473b4f32e175f767bClass extends Cms\Classes\LayoutCode
{

public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
  
}
}
