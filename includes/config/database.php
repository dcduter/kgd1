<?php

function conectarDB(): mysqli {
    $db = mysqli_connect('localhost', 'c2800591', 'fo66sapuZA', 'c2800591_kdg');
    // $db = mysqli_connect('localhost', 'root', '', 'kdg_crud');

    if(!$db) {
        echo "Error al conectar a la base de datos";
        exit;
    }
    return $db;
}