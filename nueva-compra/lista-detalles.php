<?php
    require_once("config.php");
    if(isset($_GET["calidad"])){
        $calidad =  $_GET["calidad"];

        $sql = "SELECT * FROM `calidad`";
    }
    else{
        $sql = "CALL `ListaProducto`();";
    }

    $rs = $cn->query($sql);
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
?>