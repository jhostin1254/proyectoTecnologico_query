<?php 
    require_once("config.php");

    $cartic = $_POST["cartic"];
    $dartic = $_POST["dartic"];
    $rs = $cn->query("UPDATE articulo SET dartic='$dartic' where cartic = $cartic");
    echo $cn->insert_id;
    $cn-> close();
?>