<?php namespace Event\Event;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'event\event\components\EventForm'=>'eventform',
            'event\event\components\EventList'=>'eventlist',
            'event\event\components\EventDetail'=>'eventDetail',
            'event\event\components\ManageEvent'=>'manageEvent',
            'event\event\components\ManaEventView'=>'manageEventView',
            'event\event\components\ManageEventEdit'=>'manageEventEdit',
            'event\event\components\Admin'=>'admin',
            'event\event\components\Access'=>'access',
            'event\event\components\AdminDemande'=>'adminDemande',
            'event\event\components\Promo'=>'Promo',
            'event\event\components\ModifSub'=>'modifSub',
            
        ];
    }
    public function registerSettings()
    {
    }
}
