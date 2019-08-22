<?php 
class Cms5d5e7c14952ff524826750_a46f549f873d2eb0f0512c9cee3b022fClass extends Cms\Classes\LayoutCode
{
public function onStart(){
        $this['mail']=Request::segment(2);
        $this['date']=Request::segment(3);
        $this['nom']=Request::segment(4);
        $this['lieu']=Request::segment(5);
        $this['description']=Request::segment(6);
    }
}
