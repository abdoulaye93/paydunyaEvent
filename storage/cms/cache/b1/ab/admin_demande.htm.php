<?php 
use demande\demande\models\DemandeAnnullationEvent;
class Cms5d4423834aa1d429560914_c4d685f0a9df1868d7ce7adaa51e7930Class extends Cms\Classes\LayoutCode
{
public function onStart(){$this->prepareVars();}
public function onFilterEvents() { $this->prepareVars(); }
public function prepareVars(){
  $option=post('Filter',[]);
  $this['demandes']=DemandeAnnullationEvent::ListFrontEnd($option);
  $this['pages']=$this['demandes']->lastPage();
 
  
}
}
