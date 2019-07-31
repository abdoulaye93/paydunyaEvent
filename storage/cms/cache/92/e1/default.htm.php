<?php 
use Carbon\Carbon;
use event\event\models\Event;
class Cms5d4187af94faa026420925_b2d09bf9785f2bf1b2300e6723709923Class extends Cms\Classes\LayoutCode
{

public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
 
  
}
}
