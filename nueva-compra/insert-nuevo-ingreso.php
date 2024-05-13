<?php 
    require_once("config.php");
    
    $cartic = $_POST["cartic"];
    $ccalid = $_POST["ccalid"];
    $stock = $_POST["stock"];
    $ccosto = $_POST["ccosto"];
    $rs = $cn->query("INSERT INTO articulodetalle (cartic,ccalid,stock,ccosto) VALUES ('$cartic',$ccalid,$stock,$ccosto)");
    echo $cn->insert_id;
    $cn-> close();
?>