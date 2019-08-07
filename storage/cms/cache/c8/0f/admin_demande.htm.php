<?php 
use demande\demande\models\DemandeAnnullationEvent;class Cms5d4a935be1e94040976088_f5551af1840a2a0fe35dbca77ef419b0Class extends Cms\Classes\LayoutCode
{

public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['demandes']=DemandeAnnullationEvent::ListFrontEnd($option);
  $this['pages']=$this['demandes']->lastPage();
 
  
}
}
