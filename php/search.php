<?php
require("./php/connect.php");
    if(isset($_GET["search"])){
        $search = $_GET["search"];
        $sql = "SELECT nome, id_categoria, preco, imagem_link FROM `produtos` WHERE nome like '%$search%'";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo $row['nome'];
                echo $row['id_categoria'];
                echo $row['preco'];
                $file = $row['imagem_link'];
            }
        } else {
            echo "Não encontrei nada em nossos produtos com: ".$search;
        }
    }
?>