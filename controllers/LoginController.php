<?php

class LoginController {

    private $service;
    private $view;

    public function __construct() {
        $this->service = new LoginService();
        $this->view = new LoginView();
    }

    /**
     * Mostrar la página de inicio
     */
    public function index() {
        $this->view->showInformation();
    }

    /**
     * Mostrar el login para acceder a la aplicación
     */
    public function viewLogin() {
        $this->view->showLogin();
    }

    /**
     * Comprobar los datos introducidos en login para saber si es médico o paciente
     */
    public function verificarDatos() {
        ob_start();
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email1 = $_POST['email'];
            $pass = $_POST['password'];
            $paciente = $this->service->getPacienteLogin($email1, $pass);
            $medico = $this->service->getMedicoLogin($email1, $pass);
            
            $pacientes = gettype(json_decode($paciente));
            $medicos = gettype(json_decode($medico));

            if ($pacientes === "object") {
                $pa = json_decode($paciente, true);
                setcookie('paciente', $pa['nombre'], time() + 3600 * 24);
                setcookie('id_paciente', $pa['id'], time() + 3600 * 24);
                header("Location: index.php?controller=Paciente&action=showCitas");
                exit();
            } else {
                if ($medicos === "object") {
                    $m = json_decode($medico, true);
                    setcookie('medico', $m['nombre'], time() + 3600 * 24);
                    setcookie('id_medico', $m['id'], time() + 3600 * 24);
                    header("Location: index.php?controller=Medico&action=showCitas");
                    exit();
                } else {
                    $this->cerrarSesion();
                    $this->view->showLogin();
                }
            } 
        } else {
            $this->cerrarSesion();
            $this->view->showLogin();
        }
        ob_end_flush();
    }
    
    /**
     * Eliminar la sesión y redirigir al login
     */
    public function cerrarSesion() {
        //Eliminar la sesión
        session_destroy();

        //Eliminar las cookies
        setcookie('id_paciente', $pa['id'], time() - 3601);
        setcookie('paciente', $pa['nombre'], time() - 3601);
        setcookie('medico', $m['nombre'], time() - 3601);
        setcookie('id_medico', $m['id'], time() - 3601);
        
        //Redirigir al inicio
        header("Location: index.php?controller=Login&action=viewLogin");
    }
}