<?php 
use Carbon\Carbon;use event\event\models\Event;class Cms5d3c8bc83960d158877737_70e3297f872198dedfd5c4766ac05371Class extends Cms\Classes\LayoutCode
{



public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
  
}
}
