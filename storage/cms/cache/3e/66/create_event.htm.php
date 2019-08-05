<?php 
use event\event\models\Event;
use Carbon\Carbon;
class Cms5d48b0aaeb4be036654356_dfd53fe000eeb7a890591c2478eb69edClass extends Cms\Classes\LayoutCode
{
  
public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
}
}
