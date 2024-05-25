<?php

class MedicoController {
    private $service;
    private $view;
    
    public function __construct() {
        $this->service = new MedicoService();
        $this->view = new MedicoView();
    }
    
    /**
     * Mostrar las citas de cada médico pasando del id de médico guardado en la cookie
     */
    public function showCitas() {
        //if (isset($_COOKIE['id_medico'])) {
            echo $_COOKIE['id_medico'];
            $citasmedico = $this->service->getMedicoCitas();
        
            $this->view->viewCitas($citasmedico);
        //} else {
            //header("Location: index.php?controller=Login&action=cerrarSesion");
        //}    
    }
    
    public function newCita() {
        if (isset($_COOKIE['id_medico'])) {
            $cita = $this->service->newMedicoCita($_POST['fecha'], $_POST['hora'], $_COOKIE['id_medico'], $_POST['paciente'], $_POST['start'], $_POST['end']);
        } else {
            header("Location: index.php?controller=Login&action=cerrarSesion");
        }
    }
    
    public function updateCita() {
        if (isset($_COOKIE['id_medico'])) {
            //añadir le funcion para modificar la cita
        }
    }
    
    public function deleteCita() {
        
    }
}
