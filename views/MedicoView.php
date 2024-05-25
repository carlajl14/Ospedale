<?php

class MedicoView {
    public function viewCitas() {
        //echo $citas;
        
        //$data = json_decode($citas, true);
        /*foreach ($citas as $cita) {
            echo $cita;
            //return $cita;
        }*/
        
        echo '<div class="container">';
        echo '<div class="col-md-8 offset-md-2 mt-2">';
        echo '<div id="calendar" class="fondomain"></div>';        
        echo '</div>';
        echo '<!-- Modal Body-->
        <div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Nueva Cita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="" method="post">
                                <div class="mb-3 visually-hidden">
                                    <label for="id" class="form-label">ID:</label>
                                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
                                </div>
                                <div class="mb-3">
                                    <label for="titulo" class="form-label">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo">
                                </div>
                                <div class="mb-3 visually-hidden">
                                    <label for="fecha" class="form-label">Fecha:</label>
                                    <input type="text" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha">
                                </div>
                                <div class="mb-3">
                                    <label for="hora" class="form-label">Hora:</label>
                                    <input type="time" class="form-control" name="hora" id="hora" aria-describedby="helpId" placeholder="Hora">
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripcion</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="color" class="form-label">Color:</label>
                                    <input type="color" class="form-control" name="color" id="color" aria-describedby="helpId" placeholder="Color">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="borrarEvento()" class="btn btn-danger" id="btnBorrar" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" onclick="agregarCita()" class="btn btn-primary" id="btnGuardar">Añadir</button>
                    </div>
                </div>
            </div>
        </div>';
        echo '</div>';
    }
}