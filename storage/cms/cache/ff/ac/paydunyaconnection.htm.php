<?php 
use event\event\models\Event;use Carbon\Carbon;use event\event\models\Type;use event\event\models\Categorie;class Cms5d59b9137064c321901221_1a892fdad4c2e12c70b646600e332508Class extends Cms\Classes\LayoutCode
{
  




public function onStart(){$this->onPrepareVars(); 
 
 /* $user = Auth::authenticate([
  'login' =>Request::segment(2),
  'password' => Request::segment(3)
]);*/
Auth::findUserByLogin(Request::segment(2));
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
