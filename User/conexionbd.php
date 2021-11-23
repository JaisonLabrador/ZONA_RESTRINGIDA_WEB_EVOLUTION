<?php

$mysqli = new mysqli('localhost', 'root', '', 'login');

if ($mysqli->connect_errno) :
    echo "Error al conectarse con la BD MySQL" . $mysqli->connect_error;
endif;
