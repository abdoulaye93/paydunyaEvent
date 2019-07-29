<?php 
use event\event\models\Event;use Carbon\Carbon;class Cms5d3c8c540cc9d580184995_1888d88230b1aa0a66d7d2882fdef6eaClass extends Cms\Classes\LayoutCode
{
  


public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
}
}
