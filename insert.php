<?php 
    require_once("config.php");
    $cartic = $_POST["cartic"];
    $dartic = $_POST["dartic"];
    $tipo = $_POST["tipo"];
    $rs = $cn->query("INSERT INTO articulo (cartic,dartic,cdtipo) values('$cartic','$dartic',$tipo)");
    echo $cn->insert_id;
    $cn-> close();
?>