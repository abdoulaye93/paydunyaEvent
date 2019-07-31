<?php 
use Carbon\Carbon;use event\event\models\Event;class Cms5d40b06936208136815276_c8479aadf7773d34d7116ba01b4e6f65Class extends Cms\Classes\LayoutCode
{



public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
  
}
}
