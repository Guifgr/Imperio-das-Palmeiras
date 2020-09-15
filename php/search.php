<?php
require("./php/connect.php");
    if(isset($_GET["search"])){
        $search = $_GET["search"];
        $sql = "SELECT produtos.nome, categorias.nome_categoria, produtos.preco, foto.foto FROM `produtos`, `categorias`, `foto` WHERE nome like '%$search%' AND produtos.id_categoria = categorias.id AND foto.id_foto = produtos.id";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nome = ucwords($row['nome']);
                $categoria = $row['nome_categoria'];
                $preço = $row['preco'];
                $foto = base64_encode($row['foto']);
                $string[] = <<<EOD
                <section>
                <img src="data:image/jpeg;base64,$foto"/>
                <h2>$nome</h2>
                <p>Categoria: $categoria</p>
                <aside>
                <ul>
                <li>Preço: R$$preço</li>
                <li>Em estoque!</li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=5511974371974&text=Gostaria%20de%20comprar%20o(a)%20$nome%20do%20site%20no%20valor%20de%20R$$preço%20reais"><button class="button">Comprar!</button><a/>
                </aside>
                </section>
                EOD;
            }
        } else {
            echo "Não encontrei nada em nossos produtos com: ".$search;
        }
    }
    else if(isset($_GET["categoria"])){
        $categoria = $_GET["categoria"];
        $categoria = str_replace("-"," ",$categoria);
        $sql = "SELECT produtos.nome, produtos.preco, foto.foto FROM `produtos`, `foto` WHERE id_categoria = (select categorias.id from `categorias` where nome_categoria like '%$categoria%') and foto.id_foto = produtos.id";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nome = ucwords($row['nome']);
                $preço = $row['preco'];
                $foto = base64_encode($row['foto']);
                $string[] = <<<EOD
                <section class="zoom">
                <img src="data:image/jpeg;base64,$foto"/>
                <h2>$nome</h2>
                <p>Categoria: $categoria</p>
                <aside>
                <ul>
                <li>Preço: R$$preço</li>
                <li>Em estoque!</li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=5511974371974&text=Gostaria%20de%20comprar%20o(a)%20$nome%20do%20site%20no%20valor%20de%20R$$preço%20reais"><button class="button">Comprar!</button><a/>
                </aside>
                </section>
                EOD;
            }
        } else {
            echo "Não encontrei nada em nossos produtos na categoria: ".$categoria;
        }
    }else{
        $sql = "SELECT produtos.nome, categorias.nome_categoria, produtos.preco, foto.foto FROM `produtos`, `categorias`, `foto`  WHERE produtos.id_categoria = categorias.id and produtos.id = foto.id_foto LIMIT 20";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nome = ucwords($row['nome']);
                $categoria = $row['nome_categoria'];
                $preço = $row['preco'];
                $foto = base64_encode($row['foto']);
                $string[] = <<<EOD
                <section class="zoom">
                <img src="data:image/jpeg;base64,$foto"/>
                <h2>$nome</h2>
                <p>Categoria: $categoria</p>
                <aside>
                <ul>
                <li>Preço: R$$preço</li>
                <li>Em estoque!</li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=5511974371974&text=Gostaria%20de%20comprar%20o(a)%20$nome%20do%20site%20no%20valor%20de%20R$$preço%20reais"><button class="button">Comprar!</button><a/>
                </aside>
                </section>
                EOD;
            }
        } else {
            echo "Não encontrei nada em nossos produtos na categoria: ";
        }
    }
?>