<?php 
use event\event\models\Event;
use Carbon\Carbon;
class Cms5d432ea22bfaa874376034_f8bf82f364c47cb81c8c41957f2e94b9Class extends Cms\Classes\LayoutCode
{
  
public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
}
}
