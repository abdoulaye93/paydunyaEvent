<?php 

namespace payment\Payment;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'payment\payment\components\CreateConfig' => 'createconfig',
        ];
    }

    public function registerSettings()
    {

    }
}
