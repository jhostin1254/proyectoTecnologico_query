<?php
    require_once("config.php");
    if(isset($_GET["marca"])){
        $marca = $_GET["marca"];
        $sql = "SELECT * from articulo where cdtipo = $marca ";
    }
    else
    {
        $sql = "SELECT * from articulo";
    }
    $rs = $cn->query($sql);
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
?>