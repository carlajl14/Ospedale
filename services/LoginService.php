<?php

class LoginService {
    
    /**
     * Comprobar el medico
     * @param type $email
     * @param type $password
     * @return type
     */
    public function getMedicoLogin($email, $password) {
        $urlmiservicio = "http://localhost/OspedaleService/Login/MedicoLoginService.php/?email=". $email ."&password=". $password;
        $conexion = curl_init();
        //Url de la petición
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        //Tipo de contenido de la respuesta
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($conexion);
        if ($res) {
            return $res;
        }
        curl_close($conexion);
    }
    
    /**
     * Comprobar el medico
     * @param type $email
     * @param type $password
     * @return type
     */
    public function getPacienteLogin($email, $password) {
        $urlmiservicio = "http://localhost/OspedaleService/Login/PacienteLoginService.php/?email=" . $email . "&password=". $password;
        $conexion = curl_init();
        //Url de la petición
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        //Tipo de contenido de la respuesta
        curl_setopt($conexion, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($conexion);
        if ($res) {
            return $res;
        }
        curl_close($conexion);
    }
}

