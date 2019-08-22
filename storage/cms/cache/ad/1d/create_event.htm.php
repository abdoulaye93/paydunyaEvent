<?php 
use event\event\models\Event;use Carbon\Carbon;use event\event\models\Type;use event\event\models\Categorie;class Cms5d5db92daced8779361339_41699206a05d57aaae77072e9767b490Class extends Cms\Classes\LayoutCode
{
  




public function onStart(){$this->onPrepareVars(); 
  if(Request::segment(2)&&Request::segment(3)){
    $user = Auth::authenticate([
      'login' => Request::segment(2),
      'password' => Request::segment(3)
    ]);
}
 }
public function onFilterEvents() { $this->onPrepareVars(); }
public function onPrepareVars(){
  $type=Input::get('typ');
  $b=null;
  $option=post('Filter',[]);
  $this['events']=Event::ListFrontEnd($option,$b,$type);
  $this['pages']=$this['events']->lastPage();
  $this['categorie']=Categorie::all();
  $this['types']=Type::all();
  $this['categories']=Type::ListFrontEnd($option);
 
}
}
