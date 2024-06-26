<?php

if (isset($_COOKIE['paciente'])) {
    echo '<header class="header">';
    echo '<div class="container mx-auto px-4 py-4 flex justify-between items-start">';
    echo '<div class="flex items-center">';
    echo '<a href="#" class="text-xl font-bold text-white">Ospedale</a>';
    echo '</div>';
    echo '<nav class="hidden md:flex space-x-4">';
    echo '<a href="index.php?controller=Paciente&action=showCitas" class="text-white hover:text-gray-300">Inicio</a>';
    echo '<a href="index.php?controller=Prueba&action=showPruebas" class="text-white hover:text-gray-300">Pruebas</a>';
    echo '<a href="index.php?controller=Medicamento&action=showRecetas" class="text-white hover:text-gray-300">Recetas</a>';
    echo '</nav>';
    echo '<div class="hidden md:flex items-center space-x-2">';
    $paciente = $_COOKIE['paciente'];
    echo '<span class="text-white hover:text-gray-300">Usuario: '. ucfirst($paciente) .'</span>';
    echo '<a href="index.php?controller=Login&action=cerrarSesion" class="fondo text-white px-4 py-2 rounded-md">Cerrar Sesisón</a>';
    echo '</div>';
    echo '<div class="md:hidden flex items-center">';
    echo '<button @click="open = !open" class="text-gray-600 focus:outline-none">';
    echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">';
    echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
    echo '</svg>';
    echo '</button>';
    echo '</div>';
    echo '</div>';
    echo '<div x-show="open" class="md:hidden">';
    echo '<nav class="px-2 pt-2 pb-4 space-y-1 sm:px-3">';
    echo '<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Inicio</a>';
    echo '<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Pacientes</a>';
    echo '<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Cerrar Sessión</a>';
    echo '</nav>';
    echo '</div>';
    echo '</header>';
} else if (isset($_COOKIE['medico'])) {
    echo '<header class="header">';
    echo '<div class="container mx-auto px-4 py-4 flex justify-between items-start">';
    echo '<div class="flex items-center">';
    echo '<a href="#" class="text-xl font-bold text-white">Ospedale</a>';
    echo '</div>';
    echo '<nav class="hidden md:flex space-x-4">';
    echo '<a href="#" class="text-white hover:text-gray-300">Inicio</a>';
    echo '<a href="#" class="text-white hover:text-gray-300">Pacientes</a>';
    echo '</nav>';
    echo '<div class="hidden md:flex items-center space-x-2">';
    $username = $_COOKIE['medico'];
    echo '<span class="text-white hover:text-gray-300">Usuario: '. ucfirst($username) .'</span>';
    echo '<a href="index.php?controller=Login&action=cerrarSesion" class="fondo text-white px-4 py-2 rounded-md">Cerrar Sesisón</a>';
    echo '</div>';
    echo '<div class="md:hidden flex items-center">';
    echo '<button @click="open = !open" class="text-gray-600 focus:outline-none">';
    echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">';
    echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
    echo '</svg>';
    echo '</button>';
    echo '</div>';
    echo '</div>';
    echo '<div x-show="open" class="md:hidden">';
    echo '<nav class="px-2 pt-2 pb-4 space-y-1 sm:px-3">';
    echo '<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Inicio</a>';
    echo '<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Pacientes</a>';
    echo '<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Cerrar Sessión</a>';
    echo '</nav>';
    echo '</div>';
    echo '</header>';
} else {
    echo '<header class="header">';
    echo '<div class="container mx-auto px-4 py-4 flex justify-between items-start">';
    echo '<div class="flex items-center">';
    echo '<a href="#" class="text-xl font-bold text-white">Ospedale</a>';
    echo '</div>';
    echo '<div class="hidden md:flex items-center space-x-2">';
    echo '<a href="index.php?controller=Login&action=viewLogin" class="fondo text-white px-4 py-2 rounded-md">Iniciar Sesión</a>';
    echo '<a href="#" class="fondo text-white px-4 py-2 rounded-md">Crear Cuenta</a>';
    echo '</div>';
    echo '<div class="md:hidden flex items-center">';
    echo '<button @click="open = !open" class="text-gray-600 focus:outline-none">';
    echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">';
    echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
    echo '</svg>';
    echo '</button>';
    echo '</div>';
    echo '</div>';
    echo '<div x-show="open" class="md:hidden">';
    echo '<nav class="px-2 pt-2 pb-4 space-y-1 sm:px-3">';
    echo '<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Iniciar Sesión</a>';
    echo '<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-white hover:bg-gray-700">Crear Cuenta</a>';
    echo '</nav>';
    echo '</div>';
    echo '</header>';
}
?>