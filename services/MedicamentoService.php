<?php

class MedicamentoService {
    
    /**
     * Obtener los medicamentos de cada paciente
     * @param type $id
     * @return type
     */
    public function getPacienteMedicamentos($id) {
        $urlmiservicio = "http://localhost/OspedaleService/Medicamento/MedicamentoPacienteService.php/?id=". $id;
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
     * Generar QR para cada medicamento
     * @param type $medicamento
     * @return type
     */
    public function getQR($medicamento) {
        $urlmiservicio = "http://api.qrserver.com/v1/create-qr-code/?data=". $medicamento ."&size=100x100";
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
