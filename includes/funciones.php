<?php 

define('TEMPLATES_URL', __DIR__ . '/templates'); // se define la ruta de los templates
define('FUNCIONES_URL', __DIR__ . '/funciones.php'); // se define la ruta de las funciones

function incluirTemplate($nombre, $inicio  = false, $fondo = false) {
    include TEMPLATES_URL . "/$nombre.php";

}

function estaAutenticado() : bool {
    session_start();
    $auth = $_SESSION['login'];
    if ($auth) {
        return true;
    }
    return false;
}
function debuguear ($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

