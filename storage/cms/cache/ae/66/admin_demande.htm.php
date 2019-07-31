<?php 
use demande\demande\models\DemandeAnnullationEvent;class Cms5d4153bc2d27b092486653_8d09ccc76a3de46d9d9c603ec7b87fc9Class extends Cms\Classes\LayoutCode
{

public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['demandes']=DemandeAnnullationEvent::ListFrontEnd($option);
  $this['pages']=$this['demandes']->lastPage();
 
  
}
}
