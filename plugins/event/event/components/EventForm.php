<?php namespace event\event\components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;

class EventForm extends ComponentBase
{
    public function componentDetails(){
        return [
            'name'=>'EventForm',
            'description'=>'Entrer un évènement'
        ];
    }
    public function onSave(){

    }
}
