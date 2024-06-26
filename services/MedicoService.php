<?php

class MedicoService {
    
    /**
     * Obtener las citas de cada medico
     * @param type $email
     * @param type $password
     * @return type
     */
    public function getMedicoCitas() {
        $urlmiservicio = "http://localhost/OspedaleService/Medico/MedicoService.php/?id=". $_COOKIE['id_medico'];
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
    
    public function newMedicoCita($fecha, $hora, $medico, $paciente, $start, $end) {
        $envio = json_encode(array("fecha" => $fecha, "hora" => $hora, "medico_id" => $medico, "paciente_id" => $paciente, "start" => $start, "end" => $end));
        $urlmiservicio = "http://localhost/OspedaleService/Medico/MedicoService.php";
        $conexion = curl_init();
        curl_setopt($conexion, CURLOPT_URL, $urlmiservicio);
        //Cabecera, tipo de datos y longitud de envío
        curl_setopt($conexion, CURLOPT_HTTPHEADER,
                array('Content-type: application/json', 'Content-Length: ' . mb_strlen($envio)));
        //Tipo de petición
        curl_setopt($conexion, CURLOPT_POST, TRUE);
        //Campos que van en el envío
        curl_setopt($conexion, CURLOPT_POSTFIELDS, $envio);
        //para recibir una respuesta
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($conexion);
        if ($res) {
            return $res;
        }
        curl_close($conexion);
    }
}
