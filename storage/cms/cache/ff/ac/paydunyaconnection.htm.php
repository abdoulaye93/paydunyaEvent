<?php 
use event\event\models\Event;use Carbon\Carbon;use rainlab\user\models\User;use event\event\models\Type;use event\event\models\Categorie;class Cms5d5a7e7aa7faf474551928_ba7ca9542b5ea37574589e6221c4ed50Class extends Cms\Classes\LayoutCode
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
