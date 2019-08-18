<?php 
use event\event\models\Event;use Carbon\Carbon;use event\event\models\Type;use event\event\models\Categorie;class Cms5d5955290b484226401592_e18fa6b5c27799c3d31bd522e7b65b5dClass extends Cms\Classes\LayoutCode
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
