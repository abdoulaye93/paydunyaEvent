<?php 
use Carbon\Carbon;
use event\event\models\Event;
class Cms5d415d8ba30eb944544602_a13603798e8b0b8cf4edefd8a7166560Class extends Cms\Classes\LayoutCode
{

public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
  
}
}
