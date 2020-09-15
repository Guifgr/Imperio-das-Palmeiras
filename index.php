<?php 
require('./php/config.php'); 
require('./php/categorias.php'); 
require('./php/contatosql.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta property="og:title" content="Império das Palmeiras" />
    <meta property="og:description" content="Plantas de qualidade!" />
    <link rel="shortcut icon" href="img/x.ico" />
    <meta property="og:image" content="COLOCAR ALGO AQUI!!!!!!!!!!!!!!!!!!!!!" /> 
    <meta property="og:url" content="https://imperiodaspalmeiras.com.br" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@500&family=Playfair+Display&display=swap" rel="stylesheet">

    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href="./css/home.css" rel="stylesheet" type="text/css" />
    <link href="./css/onde.css" rel="stylesheet" type="text/css" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width">
    <title>Imperio das Palmeiras</title>

</head>
<body>
    <header >
            
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="<?php INCLUDE_PATH?>/home">Home</a>
            <a href="https://api.whatsapp.com/send?phone=5511974371974&text=Ol%C3%A1%20venho%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es!">Contato</a>
            <a href="<?php INCLUDE_PATH?>/carrinho"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrinho</a>
            <div class="mobileLink">
                <a href="<?php INCLUDE_PATH?>/onde">Onde estamos</a>
                <a href="<?php INCLUDE_PATH?>/sobre">Sobre</a>
            </div>
            <a></a>
            <a></a>
            <?php 
                if(isset($arrayCategorias)){
                    foreach ($arrayCategorias as $key => $value) {
                        echo $value;
                    }
                }else{
                    echo "<a>Categorias em manutenção!</a>";
                }
                ?>
        </div>
        <span class="sideOpen center" onclick="openNav()">&#9776;</span>

        <nav class="desktop center">
            <div class="center">
                
                <ul class="homeText">
                <li><a href="<?php INCLUDE_PATH?>/home">Home</a></li>
                <li><a href="<?php INCLUDE_PATH?>/contato">Contato</a></li>
                    <li><a class="escrita" href="<?php INCLUDE_PATH?>/home">• Império das Palmeiras •</a></li>
                    <li><a href="<?php INCLUDE_PATH?>/onde">Onde estamos</a></li>
                    <li><a href="<?php INCLUDE_PATH?>/sobre">Sobre</a></li>
                </ul>
            </div>
        </nav> 
        <a class="escrita mobile" href="<?php INCLUDE_PATH?>/home">• Império das Palmeiras •</a>
        <i class="fa fa-search lupa" onclick="openSearch()"></i>

        
</header>

<main>
    <div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
        <div class="overlay-content">
        <form action="./home">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
         </form>
        </div>
    </div>
    <div id="site">
        <?php
                $url = isset($_GET['url']) ? $_GET['url'] : 'home';
                if(file_exists('pages/'.$url.'.php')){
                    include('pages/'.$url.'.php');
                }
                else
                include('pages/home.php');
                ?>
        </div>
    </main>
    
    <footer>
        <p>Todos os direitos reservados</p>
    </footer>
    
    <script src="./js/jquery.js"></script>
    <script src="./js/nav.js"></script>
</body>
</html>