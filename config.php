<?php
    header("Access-Control-Allow-Origin: *");
    //Así se indica que se pueda acceder a este servicio desde cualquier dominio
    $cn = new mysqli("localhost","root","","adidas");
    //Servidor de base de datos, usuario, contraseña, base de datos
    //$cn representa a la conexión a la base de datos
?>