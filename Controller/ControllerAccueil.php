<?php

require_once 'ControllerPersonnalise.php';

/**
 * Contrôleur de la page d'accueil
 * 
 * @author Baptiste Pesquet
 */
class ControllerAccueil extends ControllerPersonnalise {

    private $record;
    
    public function __construct() 
    {
    }
    
    /**
     * Affiche la page d'accueil
     */
    public function index() 
    {
        $this->generateView();
    }

}