<?php
    require_once("config.php");

    $rs = $cn->query("SELECT * FROM `articulodetalle` ad INNER JOIN articulo a on ad.cartic = a.cartic order by fecha");
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
?>