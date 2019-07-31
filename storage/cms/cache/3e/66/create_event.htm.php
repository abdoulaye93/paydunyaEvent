<?php 
use event\event\models\Event;
use Carbon\Carbon;
class Cms5d4187f263552004328227_98bee5ddcb1585746f8fe38366e147f6Class extends Cms\Classes\LayoutCode
{
  
public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
}
}
