<?php 
use event\event\models\Event;use Carbon\Carbon;use event\event\models\Type;use event\event\models\Categorie;class Cms5d4bfc991e05d923928564_1996d6781a87fe7afe1846c57fdf4f0fClass extends Cms\Classes\LayoutCode
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
