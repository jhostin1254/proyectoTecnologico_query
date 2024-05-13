<?php 
    require_once("config.php");

    $cclien = $_POST["cclien"];
    $cartic = $_POST["cartic"];
    $ccosto = $_POST["ccosto"];
    $stock = $_POST["stock"];

    $rs = $cn->query("INSERT into articulodetalle (cartic,cclien,ccalid,stock,ccosto) VALUES ($cartic,$cclien,1,$stock,$ccosto)");
    echo $cn->insert_id;
    $cn-> close();
?>
