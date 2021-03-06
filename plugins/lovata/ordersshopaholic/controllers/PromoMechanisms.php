<?php namespace Lovata\OrdersShopaholic\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Class PromoMechanisms
 * @package Lovata\OrdersShopaholic\Controllers
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class PromoMechanisms extends Controller
{
    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    /**
     * ShippingTypes constructor.
     */
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Lovata.Shopaholic', 'shopaholic-menu-promo', 'orders-shopaholic-menu-promo-mechanism');
    }
}