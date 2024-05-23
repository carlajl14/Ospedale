<?php

class MedicoController {
    private $service;
    private $view;
    
    public function __construct() {
        $this->service = new MedicoService();
        $this->view = new MedicoView();
    }
    
    public function showCitas() {
        $this->view->viewCitas();
    }
}
