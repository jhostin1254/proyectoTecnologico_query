<?php
    require_once("config.php");
    
    $rs = $cn->query("SELECT nidart,cartic,dartic,dstipo FROM articulo a
    INNER JOIN tipo t on t.cdtipo = a.cdtipo where a.cdtipo = 1 order by t.cdtipo ");
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
?>