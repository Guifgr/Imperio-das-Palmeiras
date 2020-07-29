<?php
$sql = "SELECT `imagem`, `texto`, `nome`, `cargo`, `email`, `link` FROM `contato` WHERE id = 1";
$result = $conn->query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $nome1 = $row['nome'];
        $imagem1 = $row['imagem'];
        $texto1 = $row['texto'];
        $cargo1 = $row['cargo'];
        $email1 = $row['email'];
        $link1 = $row['link'];
    }
} else {
    echo "Não encontrei nada em nossos produtos com: ".$search;
}

$sql = "SELECT `imagem`, `texto`, `nome`, `cargo`, `email`, `link` FROM `contato` WHERE id = 2";
$result = $conn->query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $nome2 = $row['nome'];
        $imagem2 = $row['imagem'];
        $texto2 = $row['texto'];
        $cargo2 = $row['cargo'];
        $email2 = $row['email'];
        $link2 = $row['link'];
    }
} else {
    echo "Não encontrei nada em nossos produtos com: ".$search;
}

$sql = "SELECT `imagem`, `texto`, `nome`, `cargo`, `email`, `link` FROM `contato` WHERE id = 3";
$result = $conn->query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $nome3 = $row['nome'];
        $imagem3 = $row['imagem'];
        $texto3 = $row['texto'];
        $cargo3 = $row['cargo'];
        $email3 = $row['email'];
        $link3 = $row['link'];
    }
} else {
    echo "Não encontrei nada em nossos produtos com: ".$search;
}
?>