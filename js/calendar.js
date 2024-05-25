var modalEvento;
var calendar;

function getCitas() {
    fecth('index.php?controller=Medico&action=showCitas')
    .then(citas => {
         console.log(citas);
    })
}
modalEvento = new bootstrap.Modal(document.getElementById('modalEvento'), { keyboard:false });
document.addEventListener('DOMContentLoaded', function() {
    
        var calendarEl = document.getElementById('calendar');
        calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'es',
          headerToolbar: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,timeGridWeek,timeGridDay'
          },
          dateClick: function(information) {
              limpiarFormulario(information.dateStr);
              modalEvento.show();
          },
          eventClick:function(informacion) {
            console.log(informacion);
            modalEvento.show();
            recuperarDatos(informacion.event);
          },
          events: getCitas(),
          
        });
        calendar.render();
      });

function recuperarDatos(evento) {
    limpiarErrores();
    var fecha = evento.startStr.split("T");
    var hora = fecha[1].split(":");
    
    document.getElementById('id').value = evento.id; //Sería el id de la cita
    document.getElementById('titulo').value = evento.title;
    document.getElementById('fecha').value = fecha[0];
    document.getElementById('hora').value = hora[0]+":"+hora[1];
    document.getElementById('descripcion').value = evento.extendedProps.descripcion;
    document.getElementById('color').value = evento.backgroundColor;
    
    document.getElementById('btnGuardar').removeAttribute('disabled', '');
}

function borrarEvento() {
    enviarDatos("deleteCita");
}

//Obtener los datos del formulario
function agregarCita() {    
    if (document.getElementById("titulo").value == "") {
        document.getElementById("titulo").classList.add('is-invalid');
        return true;
    } else {
        document.getElementById("titulo").classList.remove('is-invalid');
        return false;
    }
    
    accion = (document.getElementById("id").value == 0) ? "newCita" : "updateCita";
    enviarDatos(accion);
}

function enviarDatos(action) {
    fetch("index.php?controller=Medico&action="+action, {
        method: "POST",
        body: recolectarDatos()
    })
            .then(data => {
                console.log(data);
                calendar.refetchEvents(); //Renderizar los eventos
                modalEvento.hide();
            })
                    .then(error => {
                        console.log(error);
            })
}

function obtenerDatos() {
    var evento = new FormData();
    
    evento.append('title', document.getElementById('titulo').value);
    evento.append('fecha', document.getElementById('fecha').value);
    evento.append('hora', document.getElementById('hora').value);
    evento.append('descripcion', document.getElementById('descripcion').value);
    evento.append('color', document.getElementById('color').value);
    
    return evento;
}

function limpiarFomulario(fecha) {
    limpiarErrores();
    document.getElementById('titulo').value = "";
    document.getElementById('fecha').value = fecha;
    document.getElementById('hora').value = "";
    document.getElementById('descripcion').value = "";
    document.getElementById('color').value = "";
    document.getElementById('id').value = "";
    
    document.getElementById('btnBorrar').setAttribute('disabled', 'disabled');
}

function limpiarErrores() {
    document.getElementById('titulo').classList.remove('is-invalid');
}