<?php 
use event\event\models\Event;use Carbon\Carbon;use event\event\models\Type;use event\event\models\Categorie;class Cms5d4d3a0065daf572528457_6fb7d8e174e2f5af289da8d1d699b42cClass extends Cms\Classes\LayoutCode
{
  




public function onStart(){$this->prepareVars(); 
 }
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $b=null;
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option,$b);
  $this['pages']=$this['events']->lastPage();
  $this['categorie']=Categorie::all();
  $this['types']=Type::all();
 
}
}
