<?php 
use event\event\models\Event;use Carbon\Carbon;use rainlab\user\models\User;use event\event\models\Type;use event\event\models\Categorie;class Cms5d5c15470d90d243182932_db7dbe6faeb7f69b516fbb4856c6c0f3Class extends Cms\Classes\LayoutCode
{
  





public function onStart(){$this->onPrepareVars(); 
$user=User::where('id',Request::segment(2))->get();
Auth::login($user[0],true);
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
