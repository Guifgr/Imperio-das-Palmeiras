<?php
require("./php/connect.php");
    if(isset($_GET["search"])){
        $search = $_GET["search"];
        $sql = "SELECT produtos.nome, categorias.nome_categoria, produtos.preco, produtos.imagem_link FROM `produtos`, `categorias` WHERE nome like '%$search%' AND produtos.id_categoria = categorias.id";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nome = ucwords($row['nome']);
                $categoria = $row['nome_categoria'];
                $preço = $row['preco'];
                $imagem = $row['imagem_link'];
                $string[] = <<<EOD
                <section>
                <img src="$imagem" alt="Smartphone" />
                <h2>$nome</h2>
                <p>Categoria: $categoria</p>
                <aside>
                <ul>
                <li>Preço: R$$preço</li>
                <li>Em estoque!</li>
                </ul>
                <button>Adicionar ao carrinho</button>
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
        $sql = "SELECT nome, id_categoria, preco, imagem_link FROM `produtos` WHERE id_categoria = (select id from `categorias` where nome like '%$categoria%')";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nome = ucwords($row['nome']);
                $preço = $row['preco'];
                $imagem = $row['imagem_link'];
                $string[] = <<<EOD
                <section class="zoom">
                <img src="$imagem" alt="Smartphone" />
                <h2>$nome</h2>
                <p>Categoria: $categoria</p>
                <aside>
                <ul>
                <li>Preço: R$$preço</li>
                <li>Em estoque!</li>
                </ul>
                <button>Adicionar ao carrinho</button>
                </aside>
                </section>
                EOD;
            }
        } else {
            echo "Não encontrei nada em nossos produtos na categoria: ".$categoria;
        }
    }else{
        $sql = "SELECT produtos.nome, categorias.nome_categoria, produtos.preco, produtos.imagem_link FROM `produtos`, `categorias`  WHERE produtos.id_categoria = categorias.id LIMIT 20";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0){
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nome = ucwords($row['nome']);
                $categoria = $row['nome_categoria'];
                $preço = $row['preco'];
                $imagem = $row['imagem_link'];
                $string[] = <<<EOD
                <section class="zoom">
                <img src="$imagem" alt="Smartphone" />
                <h2>$nome</h2>
                <p>Categoria: $categoria</p>
                <aside>
                <ul>
                <li>Preço: R$$preço</li>
                <li>Em estoque!</li>
                </ul>
                <button>Adicionar ao carrinho</button>
                </aside>
                </section>
                EOD;
            }
        } else {
            echo "Não encontrei nada em nossos produtos na categoria: ".$categoria;
        }
    }
?>