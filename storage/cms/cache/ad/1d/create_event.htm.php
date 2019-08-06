<?php 
use event\event\models\Event;use Carbon\Carbon;use event\event\models\Type;use event\event\models\Categorie;class Cms5d4940ffbf659506490474_18a46970a3885825650f2bc53883dd57Class extends Cms\Classes\LayoutCode
{
  




public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option);
  $this['pages']=$this['events']->lastPage();
  $this['categorie']=Categorie::all();
  $this['types']=Type::all();
 
}
}
