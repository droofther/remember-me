<?php

include 'conection_db.php';


/* */
$update = "UPDATE tareas SET titulo = value , tarea= value, fecha = value WHERE 1 ";

$ejecutar = mysqli_query($conection, $query);