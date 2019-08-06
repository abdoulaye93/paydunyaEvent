<?php 
use Carbon\Carbon;use event\event\models\Event;class Cms5d48aafd55157727920339_bb3973acb33dd7fe3a4c36fd5052d313Class extends Cms\Classes\LayoutCode
{



public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
  
}
}
