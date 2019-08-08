<?php 
use event\event\models\Event;use Carbon\Carbon;use event\event\models\Type;use event\event\models\Categorie;class Cms5d4ca3c8e01e4562864716_3eded0241995893109be5365181ea7b4Class extends Cms\Classes\LayoutCode
{
  




public function onStart(){$this->prepareVars(); 
 }
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
  $this['categorie']=Categorie::all();
  $this['types']=Type::all();
 
}
}
