<?php

$db = mysqli_connect( '108.179.194.74', 'mannysgr_userDesignet', 'Daniel23*', 'mannysgr_Designet');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
