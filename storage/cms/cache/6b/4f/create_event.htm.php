<?php 
use event\event\models\Event;use Carbon\Carbon;class Cms5d4046ed90f90415811497_68ee9c21f448911fa25af0b92fbe6a7dClass extends Cms\Classes\LayoutCode
{
  


public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
}
}
