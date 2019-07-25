<?php 
use Carbon\Carbon;use event\event\models\Event;class Cms5d39911171aff091983235_3b58ed3d8ec3844af0b8f9d2ebaa123bClass extends Cms\Classes\LayoutCode
{


public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
  
}
}
