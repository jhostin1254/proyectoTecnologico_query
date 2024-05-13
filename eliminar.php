<?php 
    require_once("config.php");

    $nidart = $_POST["nidart"];

    $rs = $cn->query("DELETE FROM articulo where nidart = $nidart");
    echo $cn->insert_id;
    $cn-> close();
?>