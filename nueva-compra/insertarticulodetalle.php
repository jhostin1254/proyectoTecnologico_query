<?php 
    require_once("config.php");
    
    $cartic = $_POST["cartic"];
    $stock = $_POST["stock"];
    $rs = $cn->query("INSERT INTO articulodetalle (cartic,stock,) values('$cartic','$stock')");
    echo $cn->insert_id;
    $cn-> close();
?>