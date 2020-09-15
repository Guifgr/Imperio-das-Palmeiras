<?php
require("connect.php");
$include = INCLUDE_PATH;
  $sql = "SELECT nome_categoria FROM `categorias` WHERE 1";
  $result = $conn->query($sql);
  
    if ($result->rowCount() > 0){
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $arrayCategoriasMenu[] = $row['nome_categoria'];
        }
    } else {
        echo "0 results";
    }

    foreach ($arrayCategoriasMenu as $key => $value) {
        $cat = str_replace(" ","-",$value);
        $arrayCategorias[] = "<a href=/?categoria=$cat>$value</a>";
    }
  
?>

