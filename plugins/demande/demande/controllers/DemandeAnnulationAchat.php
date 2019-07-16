<?php namespace Demande\Demande\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class DemandeAnnulationAchat extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Demande.Demande', 'main-menu-item', 'side-menu-item');
    }
}
