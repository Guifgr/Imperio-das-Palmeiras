<?php 
require('./php/config.php'); 
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width">
    <title>Imperio das Palmeiras</title>

</head>
<body>
    <header >
            
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
        <span class="sideOpen center" onclick="openNav()">&#9776;</span>

        <nav class="desktop center">
            <div class="center">
                
                <ul class="homeText">
                    <li><a href="<?php INCLUDE_PATH?>/home">Home</a></li>
                    <li><a href="<?php INCLUDE_PATH?>/perfil">perfil</a></li>
                    <li><a class="escrita" href="<?php INCLUDE_PATH?>/logout">• Império das Palmeiras •</a></li>
                    <li><a href="<?php INCLUDE_PATH?>/maps">Onde estamos</a></li>
                    <li><a href="<?php INCLUDE_PATH?>/contato">Contato</a></li>
                </ul>
            </div>
        </nav> 
        <a class="escrita mobile" href="<?php INCLUDE_PATH?>/logout">• Império das Palmeiras •</a>
        <i class="fa fa-search lupa" onclick="openSearch()"></i>
        
</header>

<main>
    <div id="myOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
        <div class="overlay-content">
        <form action="./php/search.php">
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