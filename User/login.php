<?php

require 'conexionbd.php';
sleep(1);

$usuarios = $mysqli->query("SELECT Nombre, Tipo_usuario 
FROM usuarios
WHERE Usuario = '" . $_POST['nombre_new'] . "'
AND Password = '" . $_POST['passlg'] . "'");

if ($usuarios->num_rows == 1) :
    $datos = $usuarios->fetch_assoc();
    echo json_encode(array('error' => false, 'tipo' => $datos['Tipo_usuario']));
else :
    echo json_encode(array('error' => true));
endif;

$mysqli->close();
