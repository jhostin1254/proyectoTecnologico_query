<?php
    require_once("config.php");

    $rs = $cn->query("CALL articulodetalle()");
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
?>

