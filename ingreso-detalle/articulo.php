<?php
    require_once("config.php");
    $sql = "SELECT * from articulo";
    $rs = $cn->query($sql);
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
?>