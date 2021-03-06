<?php

require_once 'ControllerPersonnalise.php';

/**
 * Contrôleur de la page d'accueil
 * 
 * @author Baptiste Pesquet
 */
class ControllerAccueil extends ControllerPersonnalise {

    private $record;
    
    /**
     * 
     * @var string
     */
    const CONTROLLER_NAME = 'home';
    
    public function __construct() 
    {
    }
    
    /**
     * Affiche la page d'accueil
     */
    public function index() 
    {
    	if(!($this->request->getSession()->existAttribut('role')))
    	{
    		$this->request->getSession()->setAttribut('role','ANONYMOUS');
    	}
        $this->generateView();
    }

}
