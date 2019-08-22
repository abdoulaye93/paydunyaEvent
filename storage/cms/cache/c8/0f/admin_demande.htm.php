<?php 
use demande\demande\models\DemandeAnnullationEvent;class Cms5d5db94733042093415550_8bb4b251e54750090a3cad56f5bb6e24Class extends Cms\Classes\LayoutCode
{

public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['demandes']=DemandeAnnullationEvent::ListFrontEnd($option);
  $this['pages']=$this['demandes']->lastPage();
 
  
}
}
