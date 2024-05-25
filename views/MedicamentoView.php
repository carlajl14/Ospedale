<?php

class MedicamentoView {

    /**
     * Crear la vista para los medicamentos
     * @param type $medicamentos
     */
    public function viewMedicamentos($medicamentos) {
        $data = json_decode($medicamentos, true);
        echo '<div class="container fondomain my-5">';
        echo '<p class="text-center text-white text-3xl py-4">Recetas del paciente: ' . $_COOKIE['paciente'] . '</p>';
        echo '<div class="receta flex justify-around">';
        foreach ($data as $medicamento) {
            echo '<div class="card mb-10">';
            echo '<div class="top-section">';
            echo '<div class="border"></div>';
            echo '<div class="icons">';
            echo '<div class="logo">';
            echo '<p class="mb-1 text-white">Ospedale</p>';
            echo '</div>';
            echo '</div>';
            echo '<img class="w-28 ml-28 my-2" src="http://api.qrserver.com/v1/create-qr-code/?data='. $medicamento['nombre'] .'&size=100x100">';
            echo '</div>';
            echo '<div class="bottom-section">';
            echo '<span class="title">'. $medicamento['nombre'] .'</span>';
            echo '<div class="row row1">';
            echo '<div class="item">';
            echo '<span class="big-text">Recetado el día:</span>';
            echo '<span class="regular-text">'. $medicamento['fecha'] .'</span>';
            echo '</div>';
            echo '<div class="item">';
            echo '<span class="big-text">Médico:</span>';
            echo '<span class="regular-text">'. $medicamento['nombre_medico'] . ' '. $medicamento['apellidos'] .'</span>';
            echo '</div>';
            echo '<div class="item">';
            echo '<span class="big-text">Especialidad:</span>';
            echo '<span class="regular-text">'. $medicamento['especialidad'] .'</span>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            /*echo '<img src="http://api.qrserver.com/v1/create-qr-code/?data=' . $medicamento['nombre'] . '&size=100x100">';
            echo '<p>Fecha de la receta: <span class="text-white">' . $medicamento['fecha'] . '</span></p>';
            echo '<p>Medicamento: <span class="text-white">' . $medicamento['nombre'] . '</span></p>';
            echo '<p>Recetado por: <span class="text-white">' . $medicamento['nombre_medico'] . ' ' . $medicamento['apellidos'] . '</span></p>';
            echo '<p>Especialidad: <span class="text-white">' . $medicamento['especialidad'] . '</span></p>';*/
        }
        echo '</div>';
        echo '</div>';
    }

}
