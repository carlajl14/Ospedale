<?php

class PacienteController {
    //private $service;
    private $view;
    
    public function __construct() {
        //$this->service = new PacienteService();
        $this->view = new PacienteView();
    }
    
    public function showCitas() {
        $this->view->viewCitas();
    }
}