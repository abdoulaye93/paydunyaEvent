<?php namespace Event\Event;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'event\event\components\EventForm'=>'eventform'
        ];
    }

    public function registerSettings()
    {
    }
}
