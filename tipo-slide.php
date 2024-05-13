<?php
    require_once("config.php");

    $rs = $cn->query("SELECT * from tipo");
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
?>