<?php namespace Aero\Manager\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Packs extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'managerPacks' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Aero.Manager', 'manager', 'managerPacks');
    }
}
