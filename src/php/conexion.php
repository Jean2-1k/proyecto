
<?php

try{
$conexion = new PDO ('mysql:host=localhost; dbname=g_archivos', 'root', '');
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->exec("set names utf8");
}catch(Exception $error){
    echo 'ERROR EN LA CONEXION ' . $error->getMessage();
    die('ERROR EN LA LINEA: ' . $error->getLine());
}
