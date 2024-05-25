<?php

class MedicamentoController {
    private $service;
    private $view;
    
    public function __construct() {
        $this->service = new MedicamentoService();
        $this->view = new MedicamentoView();
    }
    
    /**
     * Mostrar las recetas de cada paciente
     */
    public function showRecetas() {
        if (isset($_COOKIE['id_paciente'])) {
            $medicamentos = $this->service->getPacienteMedicamentos($_COOKIE['id_paciente']);
            
            $this->view->viewMedicamentos($medicamentos);
        } else {
            header("Location: index.php?controller=Login&action=cerrarSesion");
        }
    }
}

