<?php namespace event\event\components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use event\event\models\Event;
use Flash;

class EventForm extends ComponentBase
{
    public function componentDetails(){
        return [
            'name'=>'EventForm',
            'description'=>'Entrer un évènement'
        ];
    }
    public function onSave(){
        $event=new Event();
        $event->nom=Input::get('nom');
        $event->lieu=Input::get('lieu');
        $event->montant=Input::get('montant');
        $event->nombre_ticket=Input::get('nbrticket');
        $event->save();
        Flash::success('évènement a été créer');
        return Redirect::back();
       
    }
}
