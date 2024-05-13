<?php 
    require_once("config.php");
    $cartic = $_POST["clien"];
    $stock = $_POST["stock"];
    $ccosto = $_POST["ccosto"];

    $rs = $cn->query("INSERT into cliente(cclien,dclien) VALUES (1,'oswaldo')");
    echo $cn->insert_id;
    $cn-> close();
?>



