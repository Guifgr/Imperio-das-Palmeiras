<?php
    require("./php/search.php")
?>
<div class="main">
    <h1>
        <?php
            if(isset($_GET["categoria"])){
                $cat = str_replace("-"," ",htmlspecialchars($_GET["categoria"]));
                echo 'Mostrando: ' . $cat;
            }
            else if(isset($_GET["search"])){
                echo 'Pesquisando por ' . $_GET["search"];
            }
            else{
                echo "home";
            }
        ?>
    </h1>
    <img src="<?php echo $file ?>" alt="">
</div>