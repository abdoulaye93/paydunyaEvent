<?php 
use event\event\models\Event;
use Carbon\Carbon;
class Cms5d415d8ef0ec9727286277_95f3f64423badecf33904ce4d4b3285fClass extends Cms\Classes\LayoutCode
{
  
public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
}
}
