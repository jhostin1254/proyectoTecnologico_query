<?php
    require_once("config.php");/* Permite incluir el contenido
    de un archivo php dentro de otro */
    if(isset($_GET["idtipo"])){
        $idtipo = $_GET["idtipo"];
        $sql = "SELECT * from tipo
        WHERE cdtipo = $idtipo";
    }
    if(isset($_GET["codigo-modelo"])){
        $sql = "SELECT cartic FROM articulo order by cartic DESC limit 1";
    }
    $rs = $cn->query($sql);

    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
    $cn->close();
