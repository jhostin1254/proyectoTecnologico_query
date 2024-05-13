<?php 
    require_once("config.php");
    $cartic = $_POST["cartic"];
    $stock = $_POST["stock"];
    $ccosto = $_POST["ccosto"];

    $rs = $cn->query("INSERT INTO articulodetalle (cartic,stock,ccosto,ccalid) values($cartic,$stock,$ccosto,'1')");
    echo $cn->insert_id;
    $cn-> close();
?>