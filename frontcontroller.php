<?php

session_start();
//Header
require $_SERVER['DOCUMENT_ROOT'].'/Ospedale/views/templates/header.php';

//Login
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/controllers/LoginController.php';
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/services/LoginService.php';
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/views/LoginView.php';

//Medicos
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/controllers/MedicoController.php';
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/services/MedicoService.php';
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/views/MedicoView.php';

//Pacientes
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/controllers/PacienteController.php';
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/services/PacienteService.php';
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/views/PacienteView.php';

//Medicamentos
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/controllers/MedicamentoController.php';
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/services/MedicamentoService.php';
include $_SERVER['DOCUMENT_ROOT'].'/Ospedale/views/MedicamentoView.php';

// Define la acción por defecto
define('ACCION_DEFECTO', 'index');
// Define el controlador por defecto
define('CONTROLADOR_DEFECTO', 'Login');
// Comprueba la acción a realizar, que llegará en la petición.
// Si no hay acción a realizar lanzará la acción por defecto, que es listar
// Y se carga la acción, llama a la función cargarAccion
function lanzarAccion($controllerObj){

    if(isset($_GET["action"]) && method_exists($controllerObj,
   $_GET["action"])){
    cargarAccion($controllerObj, $_GET["action"]);
    }
    else{
    cargarAccion($controllerObj, ACCION_DEFECTO);
    //O añadir una página indicando el error de la acción
    //die("Se ha cargado una acción errónea");
    }
   }
   // Lo que hace es ejecutar una función que va a existir en el controlador
   // y que se llama como la acción. Recibe un objeto controlador.
   function cargarAccion($controllerObj, $action){
    $accion=$action;
    $controllerObj->$accion();
   }
   // Carga el controlador especificado y devuelve una instancia del mismo
   function cargarControlador($nombreControlador) {
    $controlador = $nombreControlador . 'Controller';
    if (class_exists($controlador)) {
    return new $controlador();
    } else {
    // Si el controlador no existe, se lanza una excepción
    //O añadir una página indicando el error del controlador
    die ("controlador no válido");
    }
   }
   // Carga el controlador y la acción correspondientes
   if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
   }else{ 
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
 lanzarAccion($controllerObj);
} 