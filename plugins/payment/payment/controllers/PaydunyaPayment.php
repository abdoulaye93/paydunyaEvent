<?php namespace payment\Payment\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PaydunyaPayment extends Controller
{
    public $implement = [        'Backend\Behaviors\FormController'    ];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
    }
}
