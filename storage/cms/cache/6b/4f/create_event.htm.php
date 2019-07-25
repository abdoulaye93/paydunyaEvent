<?php 
use event\event\models\Event;use Carbon\Carbon;class Cms5d39837e38642727685112_0e026f14a639e9aefe32ad3e479f8a76Class extends Cms\Classes\LayoutCode
{
  


public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
}
}
