<?php
require("connect.php");
define("NOME", "nome");
  $sql = "SELECT nome FROM `categorias` WHERE 1";
  $result = $conn->query($sql);
  
    if ($result->rowCount() > 0){
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $arrayCategoriasMenu[] = $row[NOME];
        }
    } else {
        echo "0 results";
    }

    foreach ($arrayCategoriasMenu as $key => $value) {
        //$arrayCategorias[] = "<a href='#' >$value</a>";
    }
  
?>